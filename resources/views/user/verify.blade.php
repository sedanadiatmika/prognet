<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
    "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
    <title>Verify Email</title>
</head>

<body>
<form action="{{ url('register') }}" method="POST" enctype="multipart/form-data">

<div class="verif">
<p>Silahkan verifikasi email terlebih dahulu untuk login</p>
<p>Klik <a href="/verifyagain">link</a> berikut apabila email verifikasi belum terkirim</p>
</div>

</form>
</body>
</html>

