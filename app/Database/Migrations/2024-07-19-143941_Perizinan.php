<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Perizinan extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_izin' => [
                'type' => 'BIGINT',
                'constraint' => 20,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ],
            'info_1' => [
                'type' => 'VARCHAR',
                'constraint' => 225,
                'null' => FALSE
            ],
             'info_2' => [
                'type' => 'VARCHAR',
                'constraint' => 225,
                'null' => FALSE
            ],
            'info_3' => [
                'type' => 'VARCHAR',
                'constraint' => 225,
                'null' => FALSE
            ],
            'info_4' => [
                'type' => 'VARCHAR',
                'constraint' => 225,
                'null' => FALSE
            ],
            'info_5' => [
                'type' => 'VARCHAR',
                'constraint' => 225,
                'null' => FALSE
            ],
            'info_6' => [
                'type' => 'VARCHAR',
                'constraint' => 225,
                'null' => FALSE
            ],
            'info_7' => [
                'type' => 'VARCHAR',
                'constraint' => 225,
                'null' => FALSE
            ],
            'info_8' => [
                'type' => 'VARCHAR',
                'constraint' => 225,
                'null' => FALSE
            ],
            'info_9' => [
                'type' => 'VARCHAR',
                'constraint' => 225,
                'null' => FALSE
            ],
            'info_10' => [
                'type' => 'VARCHAR',
                'constraint' => 225,
                'null' => FALSE
            ],
            'created_at datetime default current_timestamp',
            'updated_at datetime default current_timestamp on update current_timestamp',
            'deleted_at datetime default current_timestamp on update current_timestamp',
        ]);

        $this->forge->addKey('id_izin', TRUE);
        $this->forge->createTable('izin_usaha');
    }

    public function down()
    {
        $this->forge->dropTable('izin_usaha');
    }
}
