<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Register</title>

    <style>
        html {
            font-family: Arial, Helvetica, sans-serif;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        form {
            width: 500px;
            height: 500px;
            border: none;
            border-radius: 10px;
            padding: 40px 80px;
            box-shadow: 10px 10px;
        }

        label {
            font-weight: bold;
        }

        

    </style>
</head>
<body>
    
    <form action="" method="post" class="mt-5 shadow-lg p-3 mb-5 bg-body rounded">
        <h1>Register</h1>
        <div class="mb-3 mt-3">
            <label class="form-label">Username</label>
            <input type="text" class="form-control" id="username" name="username" value=""/> 
        </div>
        <div class="mb-3">
            <label class="form-label">Email address</label>
            <input type="email" class="form-control" id="email" name="email" value=""/>
        </div>
        <div class="mb-3">
            <label class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password" value=""/>
        </div>
        <div class="mb-3">
            <label class="form-label">Confirm password</label>
            <input type="password" class="form-control" id="confirm-password" name="confirm-password" value=""/>
        </div>
        <button type="submit" class="btn btn-primary">Register</button>
    </form>
    <div id="show-error"></div>

    <script language="javascript">

        $('form').submit(function (){
            
            $('#show-error').html(''); // Make div error tag empty

            let userName = $('#username').val();
            let email = $('#email').val();
            let password = $('#password').val();
            let confirmPassword = $('#confirm-password').val();

            // Check if the information is empty or not
            if ($.trim(userName) == '' || $.trim(email) == '' || $.trim(password) == '' || $.trim(confirmPassword) == '') {
                alert('Vui lòng điền đầy đủ thông tin!');
                return false;
            };

            $.ajax({
                url: 'validate.php',
                type: 'post',
                dataType: 'json',
                data: {
                    username: userName,
                    email: email,
                    password: password
                }
            }).done((userData) => {
                let errorMessage = '';

                if ($.trim(userData.username) != '') {
                    errorMessage += userData.username + '<br>';
                }
                if ($.trim(userData.email) != '') {
                    errorMessage += userData.email + '<br>';
                }
                if ($.trim(userData.password) != '') {
                    errorMessage += userData.password + '<br>';
                }

                if (errorMessage == '') {
                    alert('Đăng ký thành công!');
                } else {
                    $('#show-error').append(errorMessage);
                }
            }).fail((userData) => {
                alert('Server error!');
            });

            return false;
        });

    </script>

</body>
</html>
</body>
</html>