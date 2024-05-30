<?php

namespace App\Controllers;

use App\Models\ModelPelanggan;
use CodeIgniter\Controller;

class Pelanggan extends BaseController
{
    public function index()
    {
        $model = new ModelPelanggan();
        $data['pelanggan'] = $model->findAll();

        return view('pelanggan/pelanggan', $data);
    }

    public function create()
    {
        helper(['form']);

        if ($this->request->getMethod() === 'post') {
            $model = new ModelPelanggan();
            $data = [
                'nama' => $this->request->getVar('nama'),
                'jk'   => $this->request->getVar('jk'),
                'alamat' => $this->request->getVar('alamat'),
                'no_hp' => $this->request->getVar('no_hp')
            ];
            $model->insert($data);
            return redirect()->to(base_url('pelanggan'));
        }

        return view('pelanggan/create');
    }
}
