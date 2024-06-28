<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'username' => 'admin',
            'password' => password_hash('admin', PASSWORD_DEFAULT)
        ];

        // Simple Queries
        $this->db->query('INSERT INTO users (username, password) VALUES(:username:, :password:)', $data);
    }
}
