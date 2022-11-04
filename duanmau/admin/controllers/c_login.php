<?php
include('models/m_login.php');

@session_start();
class c_login
{
    // render -> view user
    public function c_login()
    {
        $customer_login = new m_login();
        $view = "views/login/v_login.php";
        include('templates/layout.php');
    }

    // lấy thông tin để xử lí
    public function handle_login()
    {
        // if (isset())

        if (isset($_POST['btn'])) {
            $email = $_POST['email'];
            $password = $_POST['password'];
            echo '>>> email: ' . $email . '<br/>';
            echo '>>> password: ' . $password . '<br/>';

            $this->session_login_save($email, $password);
            if (isset($_SESSION['ho_ten'])) {
                echo '>>> hihi: ' . $_SESSION['ho_ten'];
                header('location: ../../admin/index.php');
            } else {
                $_SESSION['error_login'] = 'Sai thông tin đăng nhập!';
                header('location: ../login.php');
            }
        }
    }

    public function session_login_save($email, $password)
    {
        $customer_login = new m_login();
        $customer = $customer_login->read_m_login($email, $password);

        if (!empty($customer)) {
            // $_SESSION['ten_dang_nhap'] = 
            echo '<pre>';
            print_r($customer_login->ho_ten);
            echo '</pre>';
            $_SESSION['ho_ten'] = $customer_login->ho_ten;
        }
    }

    // xử lí khi người dùng đăng xuất
    public function logout_customer()
    {
        echo '>>> ten: ' . $_SESSION['ho_ten'];
        echo '>>> eror: ' . $_SESSION['error_login'];
        unset($_SESSION['ho_ten']);
        unset($_SESSION['error_login']);

        header('location: login.php');
    }
}