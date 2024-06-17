<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateUsers extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_user' => [
                'type'           => 'BIGINT',
                'constraint'     => 20,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'name_user' => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
            ],
            'username' => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
            ],
            'password' => [
                'type'       => 'VARCHAR',
                'constraint' => '60',
            ],
        ]);
        $this->forge->addKey('id_user', true);
        $this->forge->createTable('users');
    }

    public function down()
    {
        $this->forge->dropTable('users');
    }
}
