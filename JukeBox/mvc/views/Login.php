<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>

    <style>
        html {
            font-family: Arial, Helvetica, sans-serif;
            margin: 0;
            padding: 0;
        }

        .container {
            display: flexbox;
            align-items: center;
            width: 500px;
        }


        .form {
            display: flex;
            width: 100%;
            justify-content: center;
        }

        .login-form {
            width: 500px;
            border: none;
            border-radius: 10px;
            padding: 40px 80px;
            box-shadow: 10px 10px;
            line-height: 100%;
        }

        .register {
            width: 100%;
            justify-content: center;
            display: flexbox;
        }

        .title {
            text-align: center;
        }

        .sign-up-btn {
            width: 100%;
            border-radius: 15px;
            font-size: 30sp;
        }

        label {
            font-weight: bold;
        }

        a {
            text-decoration: none;
            color: black;
        }

        a:hover {
            color: black;
        }

        .error-message {
            color: red;
            margin-top: 10px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="form">
            <form action="./login-signup-validating/validate-login.php" method="post" class="mt-5 shadow-lg p-3 mb-5 bg-body rounded login-form">
                <h1>Login</h1>
                <div class="mb-3 mt-3">
                    <label class="form-label">Username</label>
                    <input type="text" class="form-control" id="username" name="username" value="" />
                </div>
                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" value="" />
                </div>
                <button type="submit" class="btn btn-primary" name="submit">Login</button>

                <?php

                if (isset($_GET['error'])) {
                    if ($_GET['error'] == 'invalidusername') {
                        echo '<p class="error-message">Tên đăng nhập không đúng!</p>';
                    }
                    if ($_GET['error'] == 'invalidpassword') {
                        echo '<p class="error-message">Mật khẩu không đúng!</p>';
                    }
                    if ($_GET['error'] == 'emptyinputlogin') {
                        echo '<p class="error-message">Vui lòng điền đầy đủ thông tin</p>';
                    }
                }

                ?>

            </form>
        </div>
        <div class="register">
            <h1 class="title">Do not have account?</h1>
            <a href="/JukeBox/JukeBox/SignupController/Main">
                <button class="sign-up-btn">Sign Up</button>
            </a>
        </div>
    </div>



</body>

</html>