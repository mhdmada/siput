<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Artikel extends Migration
{
    public function up()
    {
        $this->forge->addField([
			'id_artikel'         => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => true,
				'auto_increment' => true,
			],
			'judul_artikel'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			],
			'foto_artikel'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			],
            'isi_artikel'       => [
				'type'           => 'LONGTEXT',
			],
            'tgl_artikel'       => [
				'type'           => 'DATE',
			],
            'author'       => [
				'type'           => 'VARCHAR',
                'constraint'     => '100',
			],
			'created_at datetime default current_timestamp',
            'updated_at datetime default current_timestamp on update current_timestamp',
            'deleted_at datetime default current_timestamp on update current_timestamp',
		]);
		$this->forge->addPrimaryKey('id_artikel');
		$this->forge->createTable('artikel');
    }

    public function down()
    {
        $this->forge->dropTable('artikel');
    }
}
