<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Umkm extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_umkm' => [
                'type'           => 'BIGINT',
                'constraint'     => 20,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nik' => [
                'type'       => 'BIGINT',
                'constraint' => '20',
            ],
            'nama' => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
            ],
            'nama_usaha' => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
            ],
            'alamat' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'kelurahan' => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
            ],
            'kecamatan' => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
            ],
            'alamat_usaha' => [
                'type'       => 'VARCHAR',
                'constraint' => '60',
            ],
            'bidang_usaha' => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
            ],
            'nib' => [
                'type'       => 'VARCHAR',
                'constraint' => '60',
            ],
            'npwp' => [
                'type'       => 'VARCHAR',
                'constraint' => '60',
            ],
            'omzet_biaya' => [
                'type'       => 'VARCHAR',
                'constraint' => '60',
            ],
            'jumlah_tenaga_kerja' => [
                'type'       => 'VARCHAR',
                'constraint' => '60',
            ],
            'no_hp' => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
            ],
        ]);
        $this->forge->addKey('id_umkm', true);
        $this->forge->createTable('umkm');
    }

    public function down()
    {
        $this->forge->dropTable('umkm');
    }
}
