<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Berkas extends Migration
{
    public function up()
    {
        $this->forge->addField([
			'id_berkas'          => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => true,
				'auto_increment' => true,
			],
			'berkas'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			],
			'keterangan'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
            'nama'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'created_at datetime default current_timestamp',
            'updated_at datetime default current_timestamp on update current_timestamp',
            'deleted_at datetime default current_timestamp on update current_timestamp',
		]);
		$this->forge->addPrimaryKey('id_berkas');
		$this->forge->createTable('berkas');
    }

    public function down()
    {
        $this->forge->dropTable('berkas');
    }
}
