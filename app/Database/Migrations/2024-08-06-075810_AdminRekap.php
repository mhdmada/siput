<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AdminRekap extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_rekap' => [
                'type'           => 'BIGINT',
                'constraint'     => 20,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nama_pelatihan' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'jadwal_pelatihan' => [
                'type'       => 'DATE',
            ],
            'lokasi_pelatihan' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'jumlah_peserta' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'created_at datetime default current_timestamp',
            'updated_at datetime default current_timestamp on update current_timestamp',
            'deleted_at datetime default current_timestamp on update current_timestamp',
        ]);
        $this->forge->addKey('id_rekap', true);
        $this->forge->createTable('rekap');  
    }

    public function down()
    {
        $this->forge->dropTable('rekap');
    }
}
