<?php

namespace App\Controllers;

use App\Models\UserModel;

class Profile extends BaseController
{
    public function index(): string
    {
        $users = new UserModel();
        $requestedId = $this->request->getGet('id');
        $user = $requestedId ? $users->find((int) $requestedId) : $users->first();

        return view('pages/profile', [
            'pageTitle' => 'Profile',
            'activePage' => 'profile',
            'user' => $user,
        ]);
    }

    public function create(): string
    {
        return view('pages/account_create', [
            'pageTitle' => 'Add Account',
            'activePage' => 'profile',
            'validation' => service('validation'),
        ]);
    }

    public function store()
    {
        $rules = [
            'full_name' => 'required|min_length[2]|max_length[100]',
            'username' => 'required|alpha_numeric_punct|min_length[3]|max_length[50]|is_unique[users.username]',
            'email' => 'required|valid_email|max_length[100]|is_unique[users.email]',
        ];

        if (! $this->validate($rules)) {
            return redirect()->back()->withInput();
        }

        $users = new UserModel();
        $id = $users->insert([
            'full_name' => trim((string) $this->request->getPost('full_name')),
            'username' => trim((string) $this->request->getPost('username')),
            'email' => trim((string) $this->request->getPost('email')),
            'created_at' => date('Y-m-d H:i:s'),
        ], true);

        return redirect()->to(site_url('profile?id=' . $id))
            ->with('success', 'Account created successfully.');
    }
}
