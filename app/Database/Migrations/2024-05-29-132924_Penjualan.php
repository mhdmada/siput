<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Penjualan extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_penjualan' => [
                'type'           => 'BIGINT',
                'constraint'     => 20,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nama_usaha' => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
            ],
            'foto_produk' => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
            ],
            'lokasi_usaha' => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
            ],
            'nama_pemilik' => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
            ],
            'no_hp' => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
            ],
        ]);
        $this->forge->addKey('id_penjualan', true);
        $this->forge->createTable('penjualan');  
    }

    public function down()
    {
        $this->forge->dropTable('penjualan');
    }
}
