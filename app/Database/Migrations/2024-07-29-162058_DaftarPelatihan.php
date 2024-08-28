<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class DaftarPelatihan extends Migration
{
    public function up()
    {
        $this->forge->addField([
			'id_daftar'          => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => true,
				'auto_increment' => true,
			],
            'nama_lengkap'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			],
			'kode_daftar'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			],
			'file_ktp'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			],
			'file_kk'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			],
            'file_nib'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			],
            'file_npwp'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			],
			'status' 		  => [
                'type'       	=> 'VARCHAR',
                'constraint' 	=> '100',
                'default'    	=> 'pending',
            ],
			'created_at datetime default current_timestamp',
            'updated_at datetime default current_timestamp on update current_timestamp',
            'deleted_at datetime default current_timestamp on update current_timestamp',
		]);
		$this->forge->addPrimaryKey('id_daftar');
		$this->forge->createTable('pendaftaran');
    }

    public function down()
    {
        $this->forge->dropTable('pendaftaran');
    }
}
