<?php

namespace App\Controllers;

use App\Models\Modeltransaksi;
use App\Entities\Transaksientity;
use CodeIgniter\Controller;

class Transaksi extends BaseController
{
    public function index()
    {
        $model = new Modeltransaksi();
        $data['transaksi'] = $model->findAll();

        return view('transaksi/index', $data);
    }

    public function create()
    {
        helper(['form']);

        if ($this->request->getMethod() === 'post') {
            $model = new Modeltransaksi();
            $data = [
                'id_menu' => $this->request->getVar('id_menu'),
                'id_pelanggan' => $this->request->getVar('id_pelanggan'),
                'jumlah_pesanan' => $this->request->getVar('jumlah_pesanan'),
                'total_bayar' => $this->request->getVar('total_bayar'),
                'tgl_transaksi' => $this->request->getVar('tgl_transaksi')
            ];
            
            $transaksi = new Transaksi($data);
            
            if ($model->save($transaksi)) {
                return redirect()->to(base_url('transaksi'));
            } else {
                return redirect()->back()->withInput()->with('errors', $model->errors());
            }
        }

        return view('transaksi/create');
    }

    public function edit($id = null)
    {
        $model = new Modeltransaksi();
        $data['transaksi'] = $model->find($id);

        if (empty($data['transaksi'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Transaction not found');
        }

        helper(['form']);

        if ($this->request->getMethod() === 'post') {
            $dataUpdate = [
                'id_menu' => $this->request->getVar('id_menu'),
                'id_pelanggan' => $this->request->getVar('id_pelanggan'),
                'jumlah_pesanan' => $this->request->getVar('jumlah_pesanan'),
                'total_bayar' => $this->request->getVar('total_bayar'),
                'tgl_transaksi' => $this->request->getVar('tgl_transaksi')
            ];
            
            $transaksi = new Transaksi($dataUpdate);

            if ($model->save($transaksi)) {
                return redirect()->to(base_url('transaksi'));
            } else {
                return redirect()->back()->withInput()->with('errors', $model->errors());
            }
        }

        return view('transaksi/edit', $data);
    }

    public function delete($id = null)
    {
        $model = new Modeltransaksi();
        $transaksi = $model->find($id);

        if (empty($transaksi)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Transaction not found');
        }

        $model->delete($id);
        return redirect()->to(base_url('transaksi'));
    }
}
