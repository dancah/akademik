<?php 
namespace App\Controllers;
use App\Models\Register_model;

class Register extends BaseController
{
	public function __construct()
	{
		helper('form');
		$this->Register_model = new Register_model();
	}

	public function index()
	{
		return view('register/register');
	}

	public function save_register()
	{
			$data = array(
				'level'			=> '5',
				'nama_user'		=> $this->request->getPost('nama_user'),
				'username'		=> $this->request->getPost('username'),
				'email'			=> $this->request->getPost('email'),
				'password'		=> $this->request->getPost('password'),
				'created_at'	=> date('Y-m-d H:i:s'),
				'updated_at'	=> date('Y-m-d H:i:s')
			);
			$this->Register_model->save_register($data);

			session()->setFlashdata('pesan', 'Register Berhasil! Silahkan Login.');
			return redirect()->to(base_url('register'));

			session()->setFlashdata('errors', \Config\Services::validation()->getErrors());
			return redirect()->to(base_url('register'));
	}

	public function detail()
    {	
		$id = $this->request->getPost('id_mahasiswa');

        $data['mahasiswa'] = $this->Register_model->getDetail($id);
        echo view('register/detail', $data);
    }

}