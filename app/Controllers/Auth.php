<?php
namespace App\Controllers;
use App\Models\Pengguna;

class Auth extends BaseController

{
    protected $helpers = ['form'];
    public function login()
    {
        if($this->request->getPost())
        {
            $username = $this->request->getPost('username');
            $password = $this->request->getPost('password');

            if(is_array($username) || is_array($password))
            {
                session()->setFlashdata('errors',['Username/password kurang dari 3 digit']);
                return view('user/login');
            }
            $user_model = new Pengguna();
            $user = $user_model->where('username',$username)->first();

            if($user)
            {
                $salt = $user->salt;
                if($user->password!==md5($salt.$password))
                {
                    session()->setFlashdata('errors',['Password salah']);
                }else{
                    $sess_data =[
                        'username' => $user->username,
                        'id_pengguna' => $user->id_pengguna,
                        'level_pengguna' => $user->level_pengguna,
                        'isLoggedIn' => TRUE
                    ];

                    session()->set($sess_data);
                    return redirect()->to(site_url('Menu'));
                }
            }else{
                session()->setFlashdata('errors',['Username tidak ditemukan']);
            }
        }
        return view('user/login');
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to(site_url('auth/login'));
    }
}