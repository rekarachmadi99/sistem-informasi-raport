<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class AkunSiswa extends Seeder
{
    public function run()
    {
        $data = [
            'nisn' => 1,
            'username'    => 'user',
            'password'    => password_hash(123, PASSWORD_DEFAULT),
            'is_aktif'    => 1,
        ];

        // Simple Queries
        //$this->db->query('INSERT INTO users (username, email) VALUES(:username:, :email:)', $data);

        // Using Query Builder
        $this->db->table('tb_akun_siswa')->insert($data);
    }
}
