<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Centered Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f2f2f2;
        }
        .container {
            max-width: 400px;
            width: 100%;
            padding: 16px;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        input[type=text], input[type=password],input[type=email] {
            width: 100%;
            padding: 12px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
            border-radius: 5px;
        }
        button {
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
            border-radius: 5px;
        }
        button:hover {
            opacity: 0.8;
        }
        .cancelbtn {
            width: auto;
            padding: 10px 18px;
            background-color: #f44336;
            border-radius: 5px;
        }
        .container .psw {
            float: right;
            padding-top: 16px;
        }
        .container label {
            margin-bottom: 10px;
            display: block;
        }
        .container {
            padding: 16px;
        }
        .container.bg-light {
            background-color: #f1f1f1;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
            padding-top: 10px;
        }
    </style>
</head>
<body>
  
@if (session('alert_message'))
        <script>
            alert("{{ session('alert_message') }}");
        </script>
    @endif
<form action="dang-nhap" method="post">
{{csrf_field()}}
  <div class="container">
  <h2 style="text-align: center;">Đăng nhập</h2>
    <label for="uname"><b>Email</b></label>
    <input type="email" placeholder="Nhập email" name="emaillg" required>

    <label for="psw"><b>Mật khẩu</b></label>
    <input type="password" placeholder="Mật khẩu" name="passwordlg" required>
        
    <button type="submit">Đăng nhập</button>
    <a href="dang-ki">Bạn chưa có tài khoản</a>
  </div>
</form>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
