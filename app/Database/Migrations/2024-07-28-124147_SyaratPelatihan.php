<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class SyaratPelatihan extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_syarat' => [
                'type' => 'BIGINT',
                'constraint' => 20,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ],
            'judul' => [
                'type' => 'VARCHAR',
                'constraint' => 225,
                'null' => FALSE
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
            'lokasi' => [
                'type' => 'VARCHAR',
                'constraint' => 225,
                'null' => FALSE
            ],
            'jadwal' => [
                'type' => 'DATETIME',
                'null' => FALSE
            ],
            'created_at datetime default current_timestamp',
            'updated_at datetime default current_timestamp on update current_timestamp',
            'deleted_at datetime default current_timestamp on update current_timestamp',
        ]);

        $this->forge->addKey('id_syarat', TRUE);
        $this->forge->createTable('syarat_pelatihan');
    }

    public function down()
    {
        $this->forge->dropTable('syarat_pelatihan');
    }
}
