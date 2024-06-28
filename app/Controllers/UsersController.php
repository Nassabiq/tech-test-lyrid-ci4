<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;

class UsersController extends Controller
{
    public function index()
    {
        $userModel = new UserModel();
        $data['users'] = $userModel->findAll();
        return view('users/index', $data);
    }

    public function create()
    {
        return view('users/create');
    }

    public function store()
    {
        $rules = [
            'username' => 'required|min_length[3]|is_unique[users.username]',
            'password' => 'required|min_length[8]',
        ];

        if ($this->validate($rules)) {
            $userModel = new UserModel();

            $data = [
                'username' => $this->request->getPost('username'),
                'password' => $this->request->getPost('password'),
                'role' => $this->request->getPost('role')
            ];
            $userModel->save($data);
            return redirect()->to('/users');
        } else {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }
    }

    public function edit($id)
    {
        $userModel = new UserModel();
        $data['user'] = $userModel->find($id);
        return view('users/edit', $data);
    }

    public function update($id)
    {
        $rules = [
            'username' => 'required|min_length[3]|is_unique[users.username,id,{id}]',
            'password' => 'permit_empty|min_length[8]',
        ];

        if ($this->validate($rules)) {
            $userModel = new UserModel();
            $data = [
                'username' => $this->request->getPost('username'),
                'password' => $this->request->getPost('password'),
                'role' => $this->request->getPost('role')
            ];
            $userModel->update($id, $data);
            return redirect()->to('/users');
        } else {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }
    }

    public function delete($id)
    {
        $userModel = new UserModel();
        $userModel->delete($id);
        return redirect()->to('/users');
    }
}
