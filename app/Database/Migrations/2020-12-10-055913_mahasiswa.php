<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Mahasiswa extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'mhs_nim'          => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => true,
				'auto_increment' => true,
			],
			'mhs_nama'       => [
				'type'           => 'TEXT',
			],
			'mhs_jenisKelamin'       => [
				'type'           => 'TEXT',
				'constraint'     => 1,
			],
			'mhs_tempatLahir'       => [
				'type'           => 'TEXT',

			],
			'mhs_tanggalLahir'       => [
				'type'           => 'DATE',
			],

			'mhs_alamat'       => [
				'type'           => 'TEXT',
				'constraint'     => 100,
			],

			'mhs_telepon'       => [
				'type'           => 'INT',
			],


		]);
		$this->forge->addKey('mhs_nim', true);
		$this->forge->createTable('mahasiswa');
	}

	public function down()
	{
		$this->forge->dropTable('mahasiswa');
	}
}
