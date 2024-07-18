<?php
class UserController {
    public function login() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $userModel = new User();
            $user = $userModel->login($username, $password);
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

    public function logout() {
        session_destroy();
        header('Location: index.php?controller=User&action=login');
    }
}
?>
