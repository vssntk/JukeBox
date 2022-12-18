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
    <form action="/JukeBox/JukeBox/SignupController/ValidateSignup" method="post" class="mt-5 shadow-lg p-3 mb-5 bg-body rounded">
        <h1>Signup</h1>
        <div class="mb-3 mt-3">
            <label class="form-label">Username</label>
            <input type="text" class="form-control" id="username" name="username" value="" />
        </div>
        <div class="mb-3">
            <label class="form-label">Email address</label>
            <input type="email" class="form-control" id="email" name="email" value="" />
        </div>
        <div class="mb-3">
            <label class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password" value="" />
        </div>
        <div class="mb-3">
            <label class="form-label">Confirm password</label>
            <input type="password" class="form-control" id="confirm-password" name="confirm-password" value="" />
        </div>
        <button type="submit" class="btn btn-primary" name="submit">Register</button>
    </form>

    <script>
        $('#message-modal').modal(
            {show: true}
        );
    </script>

</body>

<!-- Message Modal -->
    <div class="modal fade" id="message-modal" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Thông báo</h4>
                </div>
                <div class="modal-body">
                    <p id="message-content">Lỗi</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Đóng</button>
                </div>
            </div>

        </div>
    </div><!-- Message modal -->  

</html>