<?php namespace App\Controllers;
use App\Models\Auth_model;

class Auth extends BaseController
{
	public function __construct()
	{
		helper('form');
        $this->session = \Config\Services::session();
		$this->Auth_model = new Auth_model();
	}

	public function index()
	{
		return view('login/login');
	}
	
    public function cek_login()
    {
        $model      = new Auth_model();
        $username   = $this->request->getPost('username');
        $password   = $this->request->getPost('password');
        $row        = $model->login_user($username, $password);

        if ($row > 0) {
         
            if($row['level'] == "1") {
                session()->set('log', true);
                session()->set('username', $row['username']);
                session()->set('level', $row['level']);
                return redirect()->to(base_url('dosen'));
         
            } elseif($row['level'] == "2") {
                session()->set('log', true);
                session()->set('username', $row['username']);
                session()->set('level', $row['level']);
                return redirect()->to(base_url('orangtua'));
         
            } elseif($row['level'] == "3") {
                session()->set('log', true);
                session()->set('username', $row['username']);
                session()->set('nama', $row['nama']);
                session()->set('level', $row['level']);
                return redirect()->to(base_url('mahasiswa'));

            } elseif($row['level'] == "4") {
                session()->set('log', true);
                session()->set('username', $row['username']);
                session()->set('level', $row['level']);
                return redirect()->to(base_url('admin'));
            
            } elseif($row['level'] == "5") {
                session()->set('log', true);
                session()->set('username', $row['username']);
                session()->set('level', $row['level']);
                return redirect()->to(base_url('pengguna'));
         
            } else {
                session()->setFlashdata('pesan', 'Username atau Password Anda Salah');
                return redirect()->to(base_url('auth'));
            }	
        } else {
            session()->setFlashdata('pesan', 'User tidak ditemukan');
            return redirect()->to(base_url('auth'));
        }
    }

	public function logout()
	{
		session()->remove('log');
		session()->remove('username');
        session()->remove('nama');
		session()->remove('level');
		session()->setFlashdata('sukses', 'Anda telah Logout');
		return redirect()->to(base_url('auth'));
	}

}