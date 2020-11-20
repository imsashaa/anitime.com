<?php

class User extends Controller {
    public function __construct(){
        $this->userModel = $this->model('User_model');
    }

    public function register()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            
            $data = [
                'username' => trim($_POST['username']),
                'password' => trim($_POST['password']),
                'cpassword' => trim($_POST['cpassword']),
                'nama' => trim($_POST['nama']),
                'email' => trim($_POST['email']),
                'level' => trim($_POST['level']),

                'username_err' => '',
                'password_err' =>'',
                'cpassword_err' => '',
                'nama_err' => '',
                'email_err' =>'',
                'level_err' => ''
            ];

            if (empty($data['username'])) {
                $data['username_err'] = 'Mohon Isi Username';
            }elseif ($this->userModel->cariUsername($data['username'])) {
                $data['username_err'] = 'Username Sudah Diambil, Silahkan pilih username lain';
            }

            if (empty($data['password'])) {
                $data['password_err'] = 'Mohon Isi Password';
            }
            echo "<pre>",var_dump($data),"</pre>";

            if (empty($data['cpassword'])) {
                $data['cpassword_err'] = 'Mohon Konfirmasi Password';
            } elseif ($data['password'] != $data['cpassword']) {
                $data['cpassword_err'] = 'Kata Sandi Tidak Cocok';
            }

            if (empty($data['username_err']) && empty($data['password_err']) && empty($data['cpassword_err'])) {
                $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
                if ($this->userModel->register($data)) {
                    redirect('user/login');
                }
            } else {
                $data['judul'] = 'Register';
                $this->view('user/regist', $data);
            }

            
        } else {
            $data = [
                'username' => '',
                'password' => '',
                'cpassword' => '',
                'nama' => '',
                'email' => '',
                'level' => '',

                'username_err' => '',
                'password_err' =>'',
                'cpassword_err' => '',
                'nama_err' => '',
                'email_err' =>'',
                'level_err' => ''
            ];
            $data['judul'] = 'Register';
            $this->view('user/regist', $data);
        }

    }

    public function login()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $data = [
                'username' => trim($_POST['username']),
                'password' => trim($_POST['password']),
                'username_err' => '',
                'password_err' =>''
            ];
            
            if (empty($data['username'])) {
                $data['username_err'] = 'Mohon isi username';
            } elseif (!$this->userModel->cariUsername($data['username'])) {
                $data['username_err'] = 'Username tidak ditemukan';
            }

            if (empty($data['password'])) {
                $data['password_err'] = 'Mohon Isi Password';
            }

            if (empty($data['username_err']) && empty($data['password_err'])) {
                $loggedIn = $this->userModel->login($data['password'], $data['username']);
                if ($loggedIn) {
                    $this->createSessionLogin($loggedIn);
                } 
            } else {
                $data['judul'] = 'Login';
                $this->view('user/login', $data);
            }

        } else {
            $data = [
                'username' => '',
                'password' =>'',
                'username_err' => '',
                'password_err' =>''
            ];
            $data['judul'] = 'Login';
            $this->view('user/login', $data);
        }
    }

    public function createSessionLogin($row)
    {
        $_SESSION['username'] = $row['username'];
        redirect('home/index');
    }

    public function logout()
    {
        unset($_SESSION['username']);

        session_destroy();

        redirect('users/login');
    }
}