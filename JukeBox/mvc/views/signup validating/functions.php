<?php

function emptyInputSignup($username, $email, $password, $confirmPassword)
{
    $result = null;
    if (empty($username) || empty($email) || empty($password) || empty($confirmPassword)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function invalidUsername($username)
{
    $result = null;

    // Check username hợp lệ bằng RegEx
    if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) { 
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function invalidEmail($email)
{
    $result = null;

    // Built-in function that check the email is invalid or not
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $result = true;
    } else {
        $result = false;
    }

    return $result;
}

function passwordMatch($password, $confirmPassword)
{
    $result = null;
    if ($password !== $confirmPassword) {
        $result = true;
    } else {
        $result = false;
    }

    return $result;
}

function usernameExist($connect, $username, $email)
{
    $sqlQuery = 'SELECT * FROM user_information WHERE username = ? OR email = ?;';
    // Khởi tạo đối tượng để sử dụng với stmt_prepare()
    $stmt = mysqli_stmt_init($connect);

    if (!mysqli_stmt_prepare($stmt, $sqlQuery)) {
        header('location: ../signup.php?error=stmtfailed');
        exit();
    }

    // Gán giá trị vào tham số '?' trong query
    mysqli_stmt_bind_param($stmt, 'ss', $username, $email);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);
    if ($row = mysqli_fetch_assoc($resultData)) {
        return $row;
    } else {
        $result = false;
        return $result;
    }
}

function createUser($connect, $username, $email, $password)
{
    $sqlQuery = 'INSERT INTO user_information (username, email, password) VALUES (?, ?, ?)';
    $stmt = mysqli_stmt_init($connect);
    if (!mysqli_stmt_prepare($stmt, $sqlQuery)) {
        header('location: ../signup.php?error=stmtfailed');
        exit();
    }

    // Mã hóa mật khẩu
    $hashPassword = password_hash($password, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, 'sss', $username, $email, $hashPassword);
    mysqli_stmt_execute($stmt);

    header('location: ../signup.php?error=none');
    echo '<script> window.alert("Đăng ký thành công"); </script';
    exit();
}
