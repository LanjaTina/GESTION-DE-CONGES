<?php
class UserController {
    private $userModel;

    public function __construct() {
        $this->userModel = new User();
    }

    public function login() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $user = $this->userModel->login($username, $password);
            if ($user) {
                $_SESSION['user_id'] = $user->id;
                $_SESSION['username'] = $user->username;
                header('Location: index.php?controller=Leave&action=dashboard');
            } else {
                echo 'Invalid credentials';
            }
        } else {
            require 'views/login.php';
        }
    }

    public function register() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $username = $_POST['username'];
            $password = $_POST['password'];
            if ($this->userModel->register($username, $password)) {
                header('Location: index.php?controller=User&action=login');
            } else {
                echo 'Registration failed';
            }
        } else {
            require 'views/register.php';
        }
    }

    public function logout() {
        session_destroy();
        header('Location: index.php?controller=User&action=login');
    }
}
?>