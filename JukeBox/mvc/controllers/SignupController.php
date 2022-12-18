<?php
class SignupController extends Controller 
{
    public function Main()
    {
         // GỌI Model
         $account_model = $this->model("AccountModel");

        // GỌI View
        $this->view("Signup");
    }

    public function ValidateSignup()
    {
        if (isset($_POST['submit'])) 
        {
            $username = $_POST['username'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $confirmPassword = $_POST['confirm-password'];
        
            // require_once('connection.php');
            // require_once('validate-signup-functions.php');
        
            // Kiểm tra input bị trống
            if ($this->emptyInputSignup($username, $email, $password, $confirmPassword) !== false) {
                header('location: ../signup.php?error=emptyinput');
                exit();
            } 
            // Kiểm tra username hợp lệ
            if ($this->invalidUsername($username) !== false) {
                header('location: ../signup.php?error=invalidusername');
                exit();
            }
            // Kiểm tra email hợp lệ
            if ($this->invalidEmail($email) !== false) {
                header('location: signup.php?error=invalidemail');
                exit();
            }
            // Kiểm tra password và confirmpassword giống nhau
            if ($this->passwordMatch($password, $confirmPassword) !== false) {
                header('location: ../signup.php?error=passworddontmatch');
                exit();
            }
            // Kiểm tra username và email đã tồn tại trong DB
            if ($account_model->usernameExist($connect, $username, $email) !== false) {
                header('location: ../signup.php?error=username_and_email_taken');
                exit();
            }
        
            // Thực hiện insert vào DB 
            $account_model->createUser($connect, $username, $email, $password);
        
        } 
        else {
            header("location: ../JukeBox/JukeBox/SignupController");
            exit();
        }
    }

    private function emptyInputSignup($username, $email, $password, $confirmPassword)
    {
        $result = null;
        if (empty($username) || empty($email) || empty($password) || empty($confirmPassword)) {
            $result = true;
        } else {
            $result = false;
        }
        return $result;
    }
    
    private function invalidUsername($username)
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
    
    private function invalidEmail($email)
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
    
    private function passwordMatch($password, $confirmPassword)
    {
        $result = null;
        if ($password !== $confirmPassword) {
            $result = true;
        } else {
            $result = false;
        }
    
        return $result;
    }
}
?>