<?php

if(isset($_GET['alert'])){
    echo "<script>alert(\"belum login\")</script>";
}
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
    "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <title>Login</title>
</head>
<body>
    <form action="{{ url('admin/login') }}" method="POST">
        {{ csrf_field() }}


        <div class="container">
            <h1>Login</h1>

            <hr>
            <label for="name"><b>Username</b></label>
            <input type="text" placeholder="<?php if($errors->has('username')){echo $errors->first('username');} ?>" name="username" required>

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="<?php if($errors->has('password')){echo $errors->first('password');} ?>" name="password" required>
            <hr>
            <button type="submit">Login</button>

            <div class="container signin">
                <p>Belum memiliki akun? <a href="register">Register</a>.</p>
            </div>
        </div>


    </form>
</body>
</html>
