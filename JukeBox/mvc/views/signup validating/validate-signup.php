<?php

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirm-password'];

    require_once('connection.php');
    require_once('functions.php');

    // Kiểm tra input bị trống
    if (emptyInputSignup($username, $email, $password, $confirmPassword) !== false) {
        header('location: ../signup.php?error=emptyinput');
        exit();
    } 
    // Kiểm tra username hợp lệ
    if (invalidUsername($username) !== false) {
        header('location: ../signup.php?error=invalidusername');
        exit();
    }
    // Kiểm tra email hợp lệ
    if (invalidEmail($email) !== false) {
        header('location: signup.php?error=invalidemail');
        exit();
    }
    // Kiểm tra password và confirmpassword giống nhau
    if (passwordMatch($password, $confirmPassword) !== false) {
        header('location: ../signup.php?error=passworddontmatch');
        exit();
    }
    // Kiểm tra username và email đã tồn tại trong DB
    if (usernameExist($connect, $username, $email) !== false) {
        header('location: ../signup.php?error=username_and_email_taken');
        exit();
    }

    // Thực hiện insert vào DB 
    createUser($connect, $username, $email, $password);

} 
else {
    header("location: ../signup.php");
    exit();
}
