<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>User Registration</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
<div class="container">
    <label><h1>Registration Form</h1></label>
    <div class="col-lg-12 well">
        <div class="row">
            <form method="POST" action="/registration">
                <div class="col-sm-12">
                    <div class="row">
                        <div class="col-sm-6 form-group">
                            <label>First Name</label>
                            <input type="text" placeholder="Enter First Name Here.." class="form-control">
                        </div>
                        <div class="col-sm-6 form-group">
                            <label>Last Name</label>
                            <input type="text" placeholder="Enter Last Name Here.." class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Email Address</label>
                        <input type="text" placeholder="Enter Email Address" class="form-control">
                    </div>
                    <div class="row">
                        <div class="col-sm-6 form-group">
                            <label>Password</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-sm-6 form-group">
                            <label>Confirm Password</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Mobile Number</label>
                        <input type="text" placeholder="Enter Mobile Number" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Facebook ID</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Present Address</label>
                        <textarea placeholder="Enter Address Here.." rows="3" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Profile Photo</label>
                        <input type="file" accept="image/png, image/jpeg, image/gif" name="input-file-preview"/>
                    </div>
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <button type="submit" class="btn btn-lg btn-info" >SUBMIT</button>
                </div>
            </form>
        </div>
    </div>
</div>

</div>

</body>
</html>