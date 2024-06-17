<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        // input 1 data
        // $data = [
        //     'name_user' => 'Admin',
        //     'username' => 'Admin',
        //     'password' => password_hash('admin', PASSWORD_BCRYPT),
        // ];
        // $this->db->table('users')->insert($data);

        // multi data
        $data = [
            [
                'name_user' => 'Muhammad Ziqran Febian',
                'username' => 'Ziqran',
                'password' => password_hash('ziqran', PASSWORD_BCRYPT),
            ],
            [
                'name_user' => 'Steve',
                'username' => 'Steve',
                'password' => password_hash('steve', PASSWORD_BCRYPT),
            ],
        ];
        $this->db->table('users')->insertBatch($data);
    
    }
}
