<?php

namespace App\Controllers;

use App\Models\PegawaiModel;
use CodeIgniter\Controller;

class PegawaiController extends Controller
{
    public function index()
    {
        $employeeModel = new PegawaiModel();
        $data['pegawai'] = $employeeModel->findAll();
        return view('pegawai/index', $data);
    }

    public function create()
    {
        return view('pegawai/create');
    }

    public function store()
    {
        $rules = [
            'nama' => 'required',
            'photo' => 'uploaded[photo]|mime_in[photo,image/jpg,image/jpeg]|max_size[photo,300]'
        ];

        if ($this->validate($rules)) {
            $employeeModel = new PegawaiModel();
            $file = $this->request->getFile('photo');
            if ($file->isValid() && !$file->hasMoved()) {
                $filename = $file->getRandomName();
                $file->move(WRITEPATH . 'uploads', $filename);
                $data = [
                    'nama' => $this->request->getPost('nama'),
                    'photo' => $filename
                ];
                $employeeModel->save($data);
            }
            return redirect()->to('/pegawai');
        } else {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }
    }

    public function edit($id)
    {
        $employeeModel = new PegawaiModel();
        $data['employee'] = $employeeModel->find($id);
        return view('pegawai/edit', $data);
    }

    public function update($id)
    {
        $rules = [
            'name' => 'required',
            'photo' => 'permit_empty|mime_in[photo,image/jpg,image/jpeg]|max_size[photo,300]'
        ];

        if ($this->validate($rules)) {
            $employeeModel = new PegawaiModel();
            $file = $this->request->getFile('photo');
            $data = ['nama' => $this->request->getPost('nama')];
            if ($file->isValid() && !$file->hasMoved()) {
                $filename = $file->getRandomName();
                $file->move(WRITEPATH . 'uploads', $filename);
                $data['photo'] = $filename;
            }
            $employeeModel->update($id, $data);
            return redirect()->to('/pegawai');
        } else {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }
    }

    public function delete($id)
    {
        $employeeModel = new PegawaiModel();
        $employeeModel->delete($id);
        return redirect()->to('/pegawai');
    }
}
