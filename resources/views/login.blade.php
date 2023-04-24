<!DOCTYPE html>
<html>
<head>
    <title>Login Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }

        form {
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            width: 400px;
            margin: 0 auto;
            padding: 20px;
        }

        h2 {
            text-align: center;
        }

        input[type=text], input[type=password] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        button[type=submit] {
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
        }

        button[type=submit]:hover {
            background-color: #45a049;
        }

        .cancelbtn {
            width: auto;
            padding: 10px 18px;
            background-color: #f44336;
        }

        .imgcontainer {
            text-align: center;
            margin: 24px 0 12px 0;
        }

        img.avatar {
            width: 40%;
            border-radius: 50%;
        }

        .container {
            padding: 16px;
        }

        span.psw {
            float: right;
            padding-top: 16px;
        }

        @media screen and (max-width: 600px) {
            form {
                width: 100%;
            }
        }
    </style>
</head>
<body>

<form method="POST" action="{{ route('login') }}">
    <div class="imgcontainer">
        <img
            src="https://scontent.fhan1-1.fna.fbcdn.net/v/t39.30808-1/336171687_129162599933758_439339820751928032_n.jpg?stp=dst-jpg_p200x200&_nc_cat=106&ccb=1-7&_nc_sid=7206a8&_nc_ohc=xM9NVGHRHwUAX8LJYml&_nc_ht=scontent.fhan1-1.fna&oh=00_AfDXs0xiqn-k64SgAQS_wgf4ElmBn07RCvh5L7dzh9npCQ&oe=644A4641"
            alt="Avatar" class="avatar">
    </div>

    <h2>Login Form</h2>
    @csrf
    <div class="container">
        <label for="username"><b>Username</b></label>
        <input id="username" type="text" placeholder="Enter Username" name="username" value="{{ old('username') }}"
               required autofocus>

        <label for="password">{{ __('Password') }}</label>
        <input id="password" type="password" placeholder="Enter Password" name="password" required
               autocomplete="current-password">

        <button type="submit">Login</button>
        <label>
            <input type="checkbox" checked="checked" name="remember"> Remember me
        </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
        <button type="button" class="cancelbtn">Cancel</button>
        <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
</form>

</body>
</html>
