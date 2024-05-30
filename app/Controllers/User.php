<?php

namespace App\Controllers;
use \App\Models\Pengguna;

class User extends BaseController
{
    protected $helpers = ['form'];
    public function register()
    {
        if($this->request->getPost())
        {
            $data = $this->request->getPost();

            $password = $this->request->getPost('password');
            $repeat_password = $this->request->getPost('repeat_password');

            if($password!=$repeat_password)
            {
                session()->setFlashdata('errors',['password dan repeat password tidak sama']);
                return view('user/register');
            }
            $user_model = new Pengguna();
            $user_entity = new \App\Entities\User();
            $user_entity->fill($data);
            $user_entity->level_pengguna = 1;
            $user_entity->created_by = 1;
            if($user_model->save($user_entity)==false){
                session()->setFlashdata('errors', $user_model->errors());
            }else{
                return view('user/login');
            }
        }
        return view('user/register');
    }
}
