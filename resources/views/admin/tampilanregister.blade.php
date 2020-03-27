<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
    "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
    <title>Register</title>
</head>
<body>
    <form action="{{ url('admin/register') }}" method="POST" enctype="multipart/form-data">

        {{ csrf_field() }}
        <div class="container">
            <h1>Register</h1>
            <hr>

            <label for="name"><b>Nama</b></label>
            <input type="text" placeholder="<?php if($errors->has('name')){echo $errors->first('name');} ?>" name="name" required>

            <label for="phone"><b>Nomor Telepon</b></label>
            <input type="text" placeholder="<?php if($errors->has('phone')){echo $errors->first('phone');} ?>" name="phone" required>

            <label for="name"><b>Username</b></label>
            <input type="text" placeholder="<?php if($errors->has('username')){echo $errors->first('username');} ?>" name="username" required>

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="<?php if($errors->has('password')){echo $errors->first('password');} ?>" name="password" required>

            <label for="psw"><b>Ulangi Password</b></label>
            <input type="password" placeholder="<?php if($errors->has('password_confirmation')){echo $errors->first('password_confirmation');} ?>"
               name="password_confirmation" required>

            <label for="name"><b>Foto Anda</b></label>
            <input type="file" placeholder="<?php if($errors->has('file')){echo $errors->first('file');} ?>" name="file" required>
            <hr>

            <button type="submit" class="registerbtn">Register</button>

            <div class="container signin">
                <p>Sudah memiliki akun? <a href="login">Login</a>.</p>
            </div>
        </div>


    </form>
</body>
</html>
