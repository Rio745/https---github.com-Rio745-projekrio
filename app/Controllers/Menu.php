<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\MenuModel;

class Menu extends BaseController
{
    protected $helpers = ['form', 'my_helper'];

    public function index()
    {
        $menu_model = new MenuModel();
        $menus = $menu_model->findAll();

        return view('menu/index', [
            'menus' => $menus,
        ]);
    }

    public function create()
    {
        if ($this->request->getPost()) {
            $data = $this->request->getPost();
            $menu_model = new MenuModel();
            $menu_entity = new \App\Entities\Menu();

            $menu_entity->nama = $this->request->getPost('nama');
            $menu_entity->fill($data);

            $validated = $this->validate([
                'gambar' => [
                    'uploaded[gambar]',
                    'mime_in[gambar,image/jpg,imagejpeg,image/gift,image/png]',
                ],
            ]);

            if ($this->request->getFile('gambar')->isValid()) {
                $gambar = $this->request->getFile('gambar');
                $fileName = $gambar->getRandomName();
                $foto = \Config\Services::image();
                $foto->withFile($gambar);
                $foto->move(ROOTPATH . 'public/uploads/', $fileName);
                $menu_entity->gambar = $fileName;
                $data['gambar'] = $fileName;
            }

            if ($menu_model->save($data) == true) {
                return redirect()->to(site_url('menu/index'));
            } else {
                session()->setFlashdata('errors', $menu_model->errors());
            }
        }
        return view('menu/create');
    }

    public function update()
    {
        $id_menu = $this->request->uri->getSegment(3);
        $menu_model = new MenuModel();
        $menu = $menu_model->find($id_menu);

        if($this->request->getPost())
        {
            $data = $this->request->getPost();
            $menu_entity = new \App\Entities\Menu();

            $validated = $this->validate([
                'gambar' => [
                    'uploaded[gambar]',
                    'mime_in[gambar,image/jpg,imagejpeg,image/gift,image/png]',
                ],
            ]);

            if ($this->request->getFile('gambar')->isValid()) {
                $gambar = $this->request->getFile('gambar');
                $fileName = $gambar->getRandomName();
                $foto = \Config\Services::image();
                $foto->withFile($gambar);
                $foto->move(ROOTPATH . 'public/uploads/', $fileName);
                $menu_entity->gambar = $fileName;
                $data['gambar'] = $fileName;
            }

            $menu_entity->id = $id_menu;
            $menu_entity->fill($data);
            $menu_entity->update_by = session()->get('id');
            $menu_model->save($menu_entity);

            $segments = ['menu','index'];

            session()->setFlashData('success','Anda Berhasil Melakukan Edit Menu');

            return redirect()->to(base_url($segments));
        }
        return view('menu/update',[
            'menu'=>$menu
        ]);
    }

    public function delete()
    {
        $id_menu = $this->request->uri->getSegment(3);
        $menu_model = new MenuModel();
        $menu_model->delete($id_menu);
        $segments = ['menu','index'];
        session()->setFlashdata('succes','Anda Berhasil Melakukan Delete Menu');
        return redirect()->to(base_url($segments));
    }
}