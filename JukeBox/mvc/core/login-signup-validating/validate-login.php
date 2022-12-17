<?php

function accountExist($connect, $username, $email)
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

    // fetch_assoc();: tìm nạp và trả về mảng với dạng
    /*
        array(
            'cột 1' => giá trị cột 1,
            'cột 2' => giá trị cột 2,
            ...
        );
    */
    if ($row = mysqli_fetch_assoc($resultData)) {
        return $row;
    } else {
        $result = false;
        return $result;
    }
}

function emptyInputLogin($user, $pass) {
    $result = null;
    if (empty($user) || empty($pass)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function login($conn, $user, $pass) {
    $userExist = accountExist($conn, $user, $pass);

    if ($userExist === false) {
        header('login: ./login.php?error=invalidusername');
        exit();
    }

    //$passwordHashed = $userExist['password'];
    //$checkpassword = password_verify($pass, $passwordHashed); // return true if 2 password match, false if not match
    $checkpassword = strcmp($pass, $userExist['password']); // so sánh 2 chuỗi password

    if ($checkpassword === false) {
        header('location: ./login.php?error=invalidpassword');
        exit();
    }
    if ($checkpassword === true) {
        session_start();
        $_SESSION['useraccount'] = $userExist['username'];

        header('location: ./login.php');
        exit();
    }

}

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    require_once('connection.php');

    if (emptyInputLogin($username, $password) !== false) {
        header('location: ./login.php?error=emptyinputlogin');
        exit();
    }

    login($connect, $username, $password);

} else {
    header('location: ./login.php');
    exit();
}

?>