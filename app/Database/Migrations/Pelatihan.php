<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Pelatihan extends Migration
{
    public function up()
    {
        $this->forge->addField([
        'id_pelatihan' => [
            'type'           => 'BIGINT',
            'constraint'     => 20,
            'unsigned'       => true,
            'auto_increment' => true,
        ],
        'nama_pelatihan' => [
            'type'       => 'VARCHAR',
            'constraint' => '50',
        ],
        'jadwal_pelatihan' => [
            'type'       => 'DATE',
        ],
        'lokasi_pelatihan' => [
            'type'       => 'VARCHAR',
            'constraint' => '50',
        ],
        'link_pendaftaran' => [
            'type'       => 'VARCHAR',
            'constraint' => '50',
        ],
        'deskripsi_pelatihan' => [
            'type'       => 'VARCHAR',
            'constraint' => '50',
        ],
    ]);
    $this->forge->addKey('id_pelatihan', true);
    $this->forge->createTable('pelatihan');  
    }

    public function down()
    {
        $this->forge->dropTable('pelatihan');
    }
}
