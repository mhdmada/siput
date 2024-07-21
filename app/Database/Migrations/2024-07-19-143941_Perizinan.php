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
            'haki' => [
                'type' => 'TEXT',
                'constraint' => 225,
                'null' => FALSE
            ],
             'nib' => [
                'type' => 'TEXT',
                'constraint' => 225,
                'null' => FALSE
            ],
            'npwp' => [
                'type' => 'TEXT',
                'constraint' => 225,
                'null' => FALSE
            ],
            'p_irt' => [
                'type' => 'TEXT',
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
