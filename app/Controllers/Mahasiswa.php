<?php namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\Mahasiswa_model;

class Mahasiswa extends BaseController
{
	public function __construct()
	{
		helper('form');
		$this->Mahasiswa_model = new Mahasiswa_model();
	}

	public function index()
	{
		return view('mahasiswa/home');
	}

	public function profile()
	{
		//$model = new Mahasiswa_model();
		//$id = $this->request->getPost('username');
		
        //$data['mahasiswa'] = $this->Mahasiswa_model->getProfile($id);
        //echo view('mahasiswa/profile', $data);

		$session = session();
		$model 	= new Mahasiswa_model();
		$id 	= $session->get('username');

		$data['mahasiswa'] = $this->Mahasiswa_model->getProfile($id);
		return view('mahasiswa/profile', $data);
	}

	public function transkrip()
	{
		$model = new Mahasiswa_model();
		$data['nilai'] = $model->getTranskrip()->getResult();
		$data['programstudi'] = $model->getProgramStudi()->getResult();
		$data['matakuliah'] = $model->getMatkul()->getResult();
		$data['mahasiswa'] = $model->getMahasiswa()->getResult();
		return view('mahasiswa/transkrip', $data);
	}

	public function modul()
	{
		$model = new Mahasiswa_model();
		$data['modul'] = $model->getModul()->getResult();
		$data['programstudi'] = $model->getProgramStudi()->getResult();
		$data['dosen'] = $model->getDosen()->getResult();
		return view('mahasiswa/modul', $data);
	}
	
	public function logbook()
	{
		$model = new Mahasiswa_model();
		$data['logbook'] = $model->getLogBook()->getResult();
		return view('mahasiswa/logbook', $data);
	}

	public function addLogBook()
    {
        $model = new Mahasiswa_model();
        $data = array(
            'name'        	=> $this->request->getPost('name'),
            'department'       		=> $this->request->getPost('department'),
			'task' 		=> $this->request->getPost('task'),
			'date' 			=> $this->request->getPost('date'),
			'from' 			=> $this->request->getPost('from'),
			'to' 			=> $this->request->getPost('to'),
			'total_hour' 			=> $this->request->getPost('total_hour'),
			'pr' 			=> $this->request->getPost('pr'),
        );
        $model->AddLogBook($data);
        return redirect()->to(base_url('/mahasiswa/logbook'));
	}

	public function updateLogBook()
    {
        $model = new Mahasiswa_model();
        $id = $this->request->getPost('id');
        $data = array(
			'name'        	=> $this->request->getPost('name'),
            'department'       		=> $this->request->getPost('department'),
			'task' 		=> $this->request->getPost('task'),
			'date' 			=> $this->request->getPost('date'),
			'from' 			=> $this->request->getPost('from'),
			'to' 			=> $this->request->getPost('to'),
			'total_hour' 			=> $this->request->getPost('total_hour'),
			'pr' 			=> $this->request->getPost('pr'),
      );
        $model->updateLogBook($data, $id);
        return redirect()->to(base_url('/mahasiswa/logbook'));
	}

	public function deleteLogBook()
	{
		$model = new Mahasiswa_model();
        $id = $this->request->getPost('id');
        $model->deleteLogBook($id);
        return redirect()->to(base_url('/mahasiswa/logbook'));
	} 
	
	public function studentrecordsheet()
	{
		$model = new Mahasiswa_model();
		$data['student'] = $model->getStudent()->getResult();
		$data['mahasiswa'] = $model->getMahasiswa()->getResult();
		$data['programstudi'] = $model->getPStudi()->getResult();
		return view('mahasiswa/studentrecordsheet', $data);
	}

	public function pembayaran()
	{
		return view('mahasiswa/pembayaran');
	}

}