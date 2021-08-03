<!DOCTYPE html>
<html>
<head>
    <title>Welcome Email</title>
</head>

<body>
<h2>Welcome to the site {{$user['name']}}</h2>
<br/>
Your registered email-id is {{$user['email']}}
<br/>
<a href="{{ url('storage/app/pdf/'.$user['email'].'.pdf') }}">download pdf</a>
</body>

</html>
