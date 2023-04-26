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
            width: 60%;
            height: 35px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            padding-left: 10px;
            font-size: 14px;

        }

        button[type=submit] {
            width: 210px;
            font-size: 24px;
            margin: 0 auto;
            background-color: #87C540;
            color: white;
            border: none;
            border-radius: 4px;
            height: 45px;
        }

        button[type=submit]:hover {
            background-color: #45a049;
        }

        .container {
            padding: 16px;
            width: 70%;
            margin: 0 auto;
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
        label{
            font-size: 20px;
        }
    </style>
</head>
<body style="all:unset; background: #D3EDBD">
 <div>
     <div style="color: white">
         <h1 style="padding: 20px 20px;margin: 0;text-align: center; background: #60902C; font-size: 40px">HỆ THỐNG QUẢN LÝ THÔNG TIN TÀI SẢN THIẾT BỊ</h1>
     </div>
     <div style="margin: 0 auto; margin-top: 100px; width: 40%;">
         <form method="POST" action="{{ route('login') }}" style="width: 100%">
             <h1 style="font-size: 70px; text-align: center; color: #60902C;">ĐĂNG NHẬP</h1>
             @csrf
             <div class="container">
                 <label for="username" style="margin-right: 66px;">Email<label style="color: red"> *</label></label>
                 <input id="username" type="text" name="username" value="{{ old('username') }}" style="width: 400px"
                        required autofocus><br>

                 <label for="password" style="margin-right: 37px;">{{ __('Mật khẩu') }}<label style="color: red"> *</label></label>
                 <input id="password" type="password"name="password" style="width: 400px" required
                        autocomplete="current-password">
                 <div style="width: 100%;display: grid;height: auto;">
                     <label style="text-align: right">
                         Ghi nhớ<input type="checkbox" checked="checked" name="remember">
                     </label>
                 </div>
                 <div style="width: 100%; display: flex">
                     <button type="submit" style="margin-top: 40px;">Đăng nhập</button>
                 </div>

             </div>
         </form>
     </div>
 </div>
</body>
</html>
