@foreach($tests as $test)
    <h1>{{$test->posted_on}}</h1>
    <h2>{{$test->total_used}}</h2>
    <p>
        User is: {{$test->user_details->fname}}
    </p>

@endforeach