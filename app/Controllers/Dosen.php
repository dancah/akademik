<?php namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\Dosen_model;

class Dosen extends BaseController
{
	
	
  public function index()
  {
	  $model = new Dosen_model();
	  $data['user'] = $model->getProfile()->getResult();
	  return view('dosen/profile',$data);
  }
  public function modul()
	{
		$model = new Dosen_model();
		$data['modul'] = $model->getModul()->getResult();
		$data['programstudi'] = $model->getProgramStudi()->getResult();
		$data['dosen'] = $model->getDosen()->getResult();
		return view('dosen/modul',$data);
	}
	public function addModul()
    {
		$model = new Dosen_model();
			$data=[
				'nama_modul'        	=> $this->request->getPost('nama_modul'),
				'id_programstudi'       => $this->request->getPost('id_programstudi'),
				'id_dosen' 				=> $this->request->getPost('id_dosen'),
				'type' 					=> $this->request->getPost('userfile'),
			];
			$model->AddModul($data);
			session()->setFlashdata('success', 'Berkas Berhasil diupload');
			return redirect()->to(base_url('dosen/modul'));
 
		//$model = new Dosen_model();
		//$periksa = $this->validate([
           // 'userfile' => [
          //      'uploaded[userfile]',
           //     'mime_in[userfile,application/pdf,application/zip,application/msword,application/x-tar]',
           //     'max_size[userfile,10000]',
           // ],
      //  ]);
 
       // if ($periksa) {
         //   $file = $this->request->getFile('userfile');
         //   $newName = $file->getName();
         //   $file->move(WRITEPATH.'uploads', $newName);
         // $data = [
		//	'nama_modul'        	=> $this->request->getPost('nama_modul'),
			//	'id_programstudi'       		=> $this->request->getPost('id_programstudi'),
			//	'id_dosen' 		=> $this->request->getPost('id_dosen'),
            //    'type'  => $newName,
          //  ];
    
          //  $model->AddModul($data);
		//	return redirect()->to(base_url('/dosen/modul'));
      //  }
       //     else
       // {
        //    return redirect()->to(base_url('/dosen/modul'));
       // }
    
       
    }
       
	
	public function deleteModul()
	{
		$model = new Dosen_model();
		$id = $this->request->getPost('id');
        $model->deleteModul($id);
        return redirect()->to(base_url('/dosen/modul'));
	} 

	public function nilai()
	{
		$model = new Dosen_model();
		$data['nilai'] = $model->getNilai()->getResult();
		$data['programstudi'] = $model->getProgramStudi()->getResult();
		$data['mahasiswa'] = $model->getMahasiswa()->getResult();
		return view('dosen/nilai',$data);
	}
	public function addNilai()
    {
        $model = new Dosen_model();
        $data = array(
            'nim'        	=> $this->request->getPost('nim'),
            'id_programstudi'       		=> $this->request->getPost('id_programstudi'),
			'tugas' 		=> $this->request->getPost('tugas'),
			'absen' 		=> $this->request->getPost('absen'),
			'midterm' 		=> $this->request->getPost('midterm'),
			'sikap' 		=> $this->request->getPost('sikap'),
			'final' 		=> $this->request->getPost('final'),
        );
        $model->AddNilai($data);
        return redirect()->to(base_url('dosen/nilai'));
	}

	public function updateNilai()
    {
        $model = new Dosen_model();
        $id = $this->request->getPost('id');
        $data = array(
			'nim'        	=> $this->request->getPost('nim'),
            'id_programstudi'       		=> $this->request->getPost('id_programstudi'),
			'tugas' 		=> $this->request->getPost('tugas'),
			'absen' 		=> $this->request->getPost('absen'),
			'midterm' 		=> $this->request->getPost('midterm'),
			'sikap' 		=> $this->request->getPost('sikap'),
			'final' 		=> $this->request->getPost('final'),
        );
        $model->updateNilai($data, $id);
        return redirect()->to(base_url('dosen/nilai'));
	}
	
	public function deleteNilai()
	{
		$model = new Dosen_model();
        $id = $this->request->getPost('id');
        $model->deleteNilai($id);
        return redirect()->to(base_url('dosen/nilai'));
	} 

	public function studentrecord()
	{
		$model = new Dosen_model();
		$data['student'] = $model->getStudent()->getResult();
		$data['mahasiswa'] = $model->getMahasiswa()->getResult();
		$data['programstudi'] = $model->getProgramStudi()->getResult();
		return view('dosen/studentrecord',$data);
	}
	public function addStudentRecord()
    {
        $model = new Dosen_model();
        $data = array(
            'nim'        	=> $this->request->getPost('nim'),
            'id_programstudi'       		=> $this->request->getPost('id_programstudi'),
			'tanggal' 		=> $this->request->getPost('tanggal'),
			'jam' 			=> $this->request->getPost('jam'),
			'catatan' 			=> $this->request->getPost('catatan'),
			'keterangan' 			=> $this->request->getPost('keterangan'),
        );
        $model->AddStudentRecord($data);
        return redirect()->to(base_url('/dosen/studentrecord'));
	}

	public function updateStudentRecord()
    {
        $model = new Dosen_model();
        $id = $this->request->getPost('id');
        $data = array(
			'nim'        	=> $this->request->getPost('nim'),
            'id_programstudi'       		=> $this->request->getPost('id_programstudi'),
			'tanggal' 		=> $this->request->getPost('tanggal'),
			'jam' 			=> $this->request->getPost('jam'),
			'catatan' 			=> $this->request->getPost('catatan'),
			'keterangan' 			=> $this->request->getPost('keterangan'),
		);
        $model->updateStudentRecord($data, $id);
        return redirect()->to(base_url('/dosen/studentrecord'));
	}
	
	
	public function deleteStudentRecord()
	{
		$model = new Dosen_model();
        $id = $this->request->getPost('id');
        $model->deleteStudentRecord($id);
        return redirect()->to(base_url('/dosen/studentrecord'));
	} 

	public function logbook()
	{
		$model = new Dosen_model();
		$data['logbook'] = $model->getLogBook()->getResult();
		return view('dosen/logbook',$data);
	}
	public function addLogBook()
    {
        $model = new Dosen_model();
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
        return redirect()->to(base_url('/dosen/logbook'));
	}

	public function updateLogBook()
    {
        $model = new Dosen_model();
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
        return redirect()->to(base_url('/dosen/logbook'));
	}
	public function deleteLogBook()
	{
		$model = new Dosen_model();
        $id = $this->request->getPost('id');
        $model->deleteLogBook($id);
        return redirect()->to(base_url('/dosen/logbook'));
	} 



}