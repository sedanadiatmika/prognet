<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
    "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <link>
    <title>Verif</title>
</head>
<body>
<h1>Halo {{ $user['name'] }}</h1>
<p>Klik link berikut untuk verifikasi email</p>

<a href="{{ url('verify',$user['email']) }}">LINK</a>

</body>
</html>
