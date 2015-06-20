<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Multiauth Login</title>
</head>
<body>
<form action="/admin/login" method="post">
    {!! csrf_field() !!}
    <input type="email" name="email"/>
    <input type="password" name="password"/>
    <button type="submit">Login</button>
</form>
</body>
</html>
