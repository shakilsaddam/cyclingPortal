<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Document</title>
</head>
<body>
<form action="/search" method="POST" enctype="multipart/form-data">
    <input type="text" name="search"/>
    <button type="submit">Search</button>
    <input type="hidden" name="_token" name="token" value="{{ csrf_token() }}">
</form>

</body>
</html>