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
        
            // Kiểm tra input bị trống
            if ($this->emptyInputSignup($username, $email, $password, $confirmPassword) != false) {
                $this->view("Signup", [
                "error" => "Không được để trống thông tin"
                ]);
                exit();
            } 
            // Kiểm tra username hợp lệ
            if ($this->invalidUsername($username) != false) {
                $this->view("Signup", [
                    "error" => "Tên đăng nhập không hợp lệ"
                ]);
                exit();
            }
            // Kiểm tra email hợp lệ
            if ($this->invalidEmail($email) != false) {
                $this->view("Signup", [
                    "error" => "Email không hợp lệ"
                ]);
                exit();
            }
            // Kiểm tra password và confirmpassword giống nhau
            if ($this->passwordMatch($password, $confirmPassword) != false) {
                $this->view("Signup", [
                    "error" => "Mật khẩu và nhập lại mật khẩu không giống nhau"
                ]);
                exit();
            }
            // Kiểm tra username và email đã tồn tại trong DB
            if ($account_model->usernameExist($connect, $username, $email) != false) {
                $this->view("Signup", [
                    "error" => "Tên đăng nhập hoặc email đã có người sử dụng"
                ]);
                exit();
            }
        
            // Thực hiện insert vào DB 
            $account_model->createUser($connect, $username, $email, $password);
        
        }
    }

    private function emptyInputSignup($username, $email, $password, $confirmPassword)
    {
        $result = false;
        if (empty($username) || empty($email) || empty($password) || empty($confirmPassword)) {
            $result = true;
        }
        return $result;
    }
    
    private function invalidUsername($username)
    {
        $result = false;
        // Check username hợp lệ bằng RegEx
        if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) { 
            $result = true;
        }
        return $result;
    }
    
    private function invalidEmail($email)
    {
        $result = false;
        // Built-in function that check the email is invalid or not
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $result = true;
        }
    
        return $result;
    }
    
    private function passwordMatch($password, $confirmPassword)
    {
        $result = false;
        if ($password != $confirmPassword) {
            $result = true;
        } 
        return $result;
    }
}
?>