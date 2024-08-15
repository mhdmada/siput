<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Konten extends Migration
{
    public function up()
    {
        $this->forge->addField([
			'id_konten'         => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => true,
				'auto_increment' => true,
			],
			'judul_konten'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			],
            'gambar_konten'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			],
            'isi_konten'       => [
				'type'           => 'LONGTEXT',
			],
            'author'       => [
				'type'           => 'VARCHAR',
                'constraint'     => '100',
			],
			'created_at datetime default current_timestamp',
            'updated_at datetime default current_timestamp on update current_timestamp',
            'deleted_at datetime default current_timestamp on update current_timestamp',
		]);
		$this->forge->addPrimaryKey('id_konten');
		$this->forge->createTable('konten');
    }

    public function down()
    {
        $this->forge->dropTable('konten');
    }
}
