<?php namespace Config;

class Validation
{
	//--------------------------------------------------------------------
	// Setup
	//--------------------------------------------------------------------

	/**
	 * Stores the classes that contain the
	 * rules that are available.
	 *
	 * @var array
	 */
	public $ruleSets = [
		\CodeIgniter\Validation\Rules::class,
		\CodeIgniter\Validation\FormatRules::class,
		\CodeIgniter\Validation\FileRules::class,
		\CodeIgniter\Validation\CreditCardRules::class,
		\Myth\Auth\Authentication\Passwords\ValidationRules::class


	];

	/**
	 * Specifies the views that are used to display the
	 * errors.
	 *
	 * @var array
	 */
	public $templates = [
		'list'   => 'CodeIgniter\Validation\Views\list',
		'single' => 'CodeIgniter\Validation\Views\single',
	];

	//--------------------------------------------------------------------
	// Rules
	//--------------------------------------------------------------------

	public $mahasiswa = [
		'mhs_nim' => [
			'rules' => 'required|min_length[3]',
		],
		'mhs_nama' => [
			'rules' => 'required|min_length[3]',
		],
		'mhs_jenisKelamin' => [
			'rules' => 'required|min_length[1]',
		],
		'mhs_tempatLahir' => [
			'rules' => 'required|min_length[5]',
		],
		'mhs_tanggalLahir' => [
			'rules' => 'required|is_natural',
		],
		'mhs_alamat' => [
			'rules' => 'required|min_length[10]',
		],
		'mhs_telepon' => [
			'rules' => 'required|is_natural',
		],
	];

	public $mahasiswa_errors = [
		'mhs_nim' => [
			'required' => '{field} Harus diisi',
			'min_length' => '{field} Minimum 3 karakter',
		],
		'mhs_nama' => [
			'required' => '{field} Harus diisi',
			'min_length' => '{field} Minimum 5 karakter',
		],
		'mhs_jenisKelamin' => [
			'required' => '{field} Harus diisi',
			'min_length' => '{field} Minimum 1 karakter',
		],
		'mhs_tempatLahir' => [
			'required' => '{field} Harus diisi',
			'min_length' => '{field} Minimum 5 karakter',
		],
		'mhs_tanggalLahir' => [
			'required' => '{field} Harus diisi',
			'is_natural' => '{field} Tidak Boleh Kosong',
		],
		'mhs_alamat' => [
			'required' => '{field} Harus diisi',
			'min_length' => '{field} Minimum 10 karakter',
		],
		'mhs_telepon' => [
			'required' => '{field} Harus diisi',
			'is_natural' => '{field} Tidak Boleh Kosong',
		],
	];
}
