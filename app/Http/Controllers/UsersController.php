<?php

namespace App\Http\Controllers;

use Request;
use Session;
use Validator;
use Illuminate\Support\Facades\DB;
use App\User_detail;
use Illuminate\Support\Facades\Input;

class UsersController extends Controller
{


    public function index()
    {
        //$user_details = User_detail::All();
        return view('user.search');
    }
    public function create()
    {
        $obj_fetch_user_info = new FetchUserInfoController;
        if($obj_fetch_user_info->in_session()==true)
        {
            session([
                'logged_in_message' => "You are already logged in"
            ]);

            return redirect('userhome');
        }else
        {
            return view('user.registration');
        }

    }
    public function store()
    {

        $validator = Validator::make(
            array(
                'fname'=>'shakil',
                'lname'=>'saddam'

            ),
            array(
                'fname'=>'required',
                'lname'=>'required'
            )
        );

        if($validator->fails())
        {
            return "Failed";
        }
        /*$this->validate(request(),[
            'fname'=>'required'
        ]);*/


        //dd(request()->all());

        $registration_data = new User_detail;
        $registration_data->fname = request('fname');
        $registration_data->lname = request('lname');
        $registration_data->email_address = request('email_address');
        $registration_data->password = request('password');
        $registration_data->mobile_no = request('mobile_no');
        $registration_data->facebook_id = request('facebook_id');
        $registration_data->email_address = request('email_address');
        $registration_data->present_address = request('present_address');

        $file = Input::file('profile_photo');
        $filename = time()."-".$file->getClientOriginalName();
        $file->move('uploads',$filename);

        $registration_data->profile_photo = $filename;

        /*$file = Input::file('profile_photo');
        $time = time();
        $file->move('uploads',$file->getClientOriginalName());
        echo $file->time().getClientOriginalName();
        $registration_data->profile_photo = $file->time().getClientOriginalName();
    */
        //$registration_data->profile_photo = request('profile_photo');
        $registration_data->profile_id = random_int(24534, 50483);
        $registration_data->save();
        return redirect('/');
    }


    public function userhome(Request $request)
    {
        $email_address=$request::get('email_address');
        $password=$request::get('password');


        //$results = User_detail::where('email_address',$email_address)->get();
        $user=DB::selectOne('select * from user_details where email_address = ? AND password = ?', [$email_address,$password]);
        //dd($user);
        //return $user;

        //$user=User_detail::where('email_address',$email_address,'password',$password)->first();

        if(!empty($user))
        {
            session([
                'user_id' => $user->id,
                'user_name' =>$user->fname,
                'user_photo' =>$user->profile_photo
            ]);
            return redirect('/userhome');
        }
        else
        {
            Session::flash('message', "Invalid credentials");
            echo '<script language="javascript">';
            echo 'alert("Invalid Username or Password !!!")';
            echo '</script>';

            return view('user.userlogin');
        }
        /*
                if(User_detail::attempt(array (
                    'email_address' => $request->get('email_address'),
                    'password' => $request->get('password')
                )))
                {
                    session([
                        'name' =>$request->get('email_address')
                    ]);
                    return "Logged in";
                }
                else
                {
                    Session::flash('message', "Invalid credentials");
                    return "Invalid";
                }
        */
    }

    public function searchBike($chasses_no)
    {
        return $chasses_no;
    }

    public function login()
    {

        /*creating object of FetchUserInfoController Class to use the function in_sessoin().
        By using this function, we can verify if user logged in or not.*/

        $obj_fetch_user_controller= new FetchUserInfoController;

        if($obj_fetch_user_controller->in_session()==false)
        {
            return view('user.userlogin');
        }else
        {
            return redirect('/userhome');
        }

    }

    public function logout()
    {
        Session::flush();
        echo '<script language="javascript">';
        echo 'alert("Successfully Logged out !!!")';
        echo '</script>';
        return redirect('');
    }
}
