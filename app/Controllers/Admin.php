<?php namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\Admin_model;

class Admin extends BaseController
{
	

	//====TABEL PEGAWAI
	public function index()
	{
		$model = new Admin_model();
        $data['pegawai'] = $model->getPegawai()->getResult();
		return view('admin/pegawai',$data);
	}

	public function tambahpegawai()
    {
		$model = new Admin_model();
		
		$data = array(
			'username'        	=> $this->request->getPost('nip'),
			'nama'        	=> $this->request->getPost('nama'),
			'password'        	=> $this->request->getPost('password'),
            'email'       		=> $this->request->getPost('email'),
			'level' 			=> $this->request->getPost('pegawai_level'),
		);
		
		$id = $model->addUser($data);
		//$user_id           = $this->request->getPost('id_user');
		//$id   = $model->id_user($user_id);
		//	$id = $this->db->insert_id();
		
		$data1 = array(
			'nip'        	=> $this->request->getPost('nip'),
			'nama'        	=> $this->request->getPost('nama'),
            'email'       	=> $this->request->getPost('email'),
			'hp' 			=> $this->request->getPost('hp'),
			'pegawai_level' => $this->request->getPost('pegawai_level'),
			'id_user'		=> $id,
		);
		//Var_dump($this->request->getPost('id_user'));
        $model->addPegawai($data1);
		return redirect()->to(base_url('admin'));
	}

	public function updatePegawai()
    {
        $model = new Admin_model();
        $id = $this->request->getPost('id_pegawai');
        $data = array(
			'nip'        	=> $this->request->getPost('nip'),
			'nama'        	=> $this->request->getPost('nama'),
            'email'       		=> $this->request->getPost('email'),
			'hp' 			=> $this->request->getPost('hp'),
			'pegawai_level' 		=> $this->request->getPost('pegawai_level'),
        );
        $model->updatePegawai($data, $id);
        return redirect()->to(base_url('admin'));
    }
	
	public function deletePegawai($id_pegawai)
	{
		$model = new Admin_model();
        $id_pegawai = $this->request->getPost('id_pegawai');
        $model->deleteUser($id_pegawai);
		//$data['pegawai'] = $model->getPegawai($id_pegawai);
        return redirect()->to(base_url('admin'));
	} 
  //====END TABEL User

  //====TABEL MATKUL

	public function matkul()
	{
		$model = new Admin_model();
		$data['matkul'] = $model->getMatkul()->getResult();
		$data['program_studi'] = $model->getProgramStudi()->getResult();
		$data['dosen'] = $model->getDosen()->getResult();
		return view('admin/matkul',$data);
	}

	public function addMatkul()
    {
        $model = new Admin_model();
        $data = array(
            'nama_matkul'        	=> $this->request->getPost('nama_matkul'),
            'periode'       		=> $this->request->getPost('periode'),
			'id_programstudi' 		=> $this->request->getPost('id_programstudi'),
			'id_pegawai' 			=> $this->request->getPost('id_pegawai'),
        );
        $model->addMatkul($data);
        return redirect()->to(base_url('admin/matkul'));
	}

	public function updateMatkul()
    {
        $model = new Admin_model();
        $id = $this->request->getPost('id_mata_kuliah');
        $data = array(
			'nama_matkul'        	=> $this->request->getPost('nama_matkul'),
            'periode'       		=> $this->request->getPost('periode'),
			'id_programstudi' 		=> $this->request->getPost('id_programstudi'),
			'id_pegawai' 			=> $this->request->getPost('id_pegawai'),
		);
        $model->updateMatkul($data, $id);
        return redirect()->to(base_url('admin/matkul'));
    }
	
	public function deleteMatkul()
	{
		$model = new Admin_model();
        $id = $this->request->getPost('id_mata_kuliah');
        $model->deletematkul($id);
        return redirect()->to(base_url('admin/matkul'));
	} 

  //====END TABEL MATKUL

	public function profile()
	{
		$model = new Admin_model();
        $data['user'] = $model->getProfile()->getResult();
		return view('admin/profile',$data);
	}
	
	public function studentlog()
	{
		$model = new Admin_model();
		$data['student'] = $model->getStudent()->getResult();
		$data['mahasiswa'] = $model->getMahasiswa()->getResult();
		$data['programstudi'] = $model->getProgramStudi()->getResult();
		return view('admin/studentlog',$data);
	}
	public function addStudentLog()
    {
        $model = new Admin_model();
        $data = array(
            'nim'        	=> $this->request->getPost('nim'),
            'id_programstudi'       		=> $this->request->getPost('id_programstudi'),
			'tanggal' 		=> $this->request->getPost('tanggal'),
			'jam' 			=> $this->request->getPost('jam'),
			'catatan' 			=> $this->request->getPost('catatan'),
			'keterangan' 			=> $this->request->getPost('keterangan'),
        );
        $model->AddStudentLog($data);
        return redirect()->to(base_url('admin/studentlog'));
	}

	public function updateStudentLog()
    {
        $model = new Admin_model();
        $id = $this->request->getPost('id');
        $data = array(
			'nim'        	=> $this->request->getPost('nim'),
            'id_programstudi'       		=> $this->request->getPost('id_programstudi'),
			'tanggal' 		=> $this->request->getPost('tanggal'),
			'jam' 			=> $this->request->getPost('jam'),
			'catatan' 			=> $this->request->getPost('catatan'),
			'keterangan' 			=> $this->request->getPost('keterangan'),
		);
        $model->updateStudentLog($data, $id);
        return redirect()->to(base_url('admin/studentlog'));
	}
	
	public function deleteStudentLog()
	{
		$model = new Admin_model();
        $id = $this->request->getPost('id');
        $model->deleteStudentLog($id);
        return redirect()->to(base_url('admin/studentlog'));
	} 
	public function modul()
	{
		$model = new Admin_model();
		$data['modul'] = $model->getModul()->getResult();
		$data['programstudi'] = $model->getProgramStudi()->getResult();
		$data['dosen'] = $model->getDosen()->getResult();
		return view('admin/modul',$data);
	}
	public function addModul()
    {
		
	//	if (!$this->validate([
		//	'userfile' => [
		//		'rules' => 'uploaded[userfile]|mime_in[userfile,application/pdf,application/zip,application/msword,application/x-tar,10000]',
		//		'errors' => [
		//			'uploaded' => 'Harus Ada File yang diupload',
		//			'mime_in' => 'File Extention Harus Berupa pdf',
			//		'max_size' => 'Ukuran File Maksimal 5 MB'
			//	]
	
		//	]
	//	])){
		//	session()->setFlashdata('error', $this->validator->listErrors());
			
	//	}
		
		//$periksa = $this->validate([
         //   'userfile' => [
          //      'uploaded[userfile]',
          //      'mime_in[userfile,application/pdf,application/zip,application/msword,application/x-tar]',
          //      'max_size[userfile,10000]',
          //  ],
        //]);
			$model = new Admin_model();
			//$file = $this->request->getFile('userfile');
			//$fileName = $file->getName();
			$data=[
				'nama_modul'        	=> $this->request->getPost('nama_modul'),
				'id_programstudi'       => $this->request->getPost('id_programstudi'),
				'id_dosen' 				=> $this->request->getPost('id_dosen'),
				'type' 					=> $this->request->getPost('userfile'),
			];
			$model->AddModul($data);
			session()->setFlashdata('success', 'Berkas Berhasil diupload');
			return redirect()->to(base_url('admin/modul'));
 
       // if ($periksa) {
          //  $file = $this->request->getFile('userfile');
           // $newName = $file->getRandomName();
            //$file->move(WRITEPATH.'uploads', );//$newName);
          //$data = [
		//		'nama_modul'        	=> $this->request->getPost('nama_modul'),
		//		'id_programstudi'       => $this->request->getPost('id_programstudi'),
		//		'id_dosen' 				=> $this->request->getPost('id_dosen'),
          //      'type'  				=> $file->getClientMimeType()
            //];
    //
      //      $model->AddModul($data);
		//	return redirect()->to(base_url('admin/modul'));
       // }
         //   else
        //{
			
          //  return redirect()->to(base_url('admin/modul'));
        //} 
    }
	
       
	
	public function deleteModul()
	{
		$model = new Admin_model();
		$id = $this->request->getPost('id');
        $model->deleteModul($id);
        return redirect()->to(base_url('admin/modul'));
	} 

	public function nilai()
	{
		$model = new Admin_model();
		$data['nilai'] = $model->getNilai()->getResult();
		$data['programstudi'] = $model->getProgramStudi()->getResult();
		$data['mahasiswa'] = $model->getMahasiswa()->getResult();
		return view('admin/nilai',$data);
	}
	public function addNilai()
    {
        $model = new Admin_model();
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
        return redirect()->to(base_url('admin/nilai'));
	}

	public function updateNilai()
    {
        $model = new Admin_model();
        $id = $this->request->getPost('id');
        $data = array(
			'nim'        	=> $this->request->getPost('nim'),
            'id_programstudi'     => $this->request->getPost('id_programstudi'),
			'tugas' 		=> $this->request->getPost('tugas'),
			'absen' 		=> $this->request->getPost('absen'),
			'midterm' 		=> $this->request->getPost('midterm'),
			'sikap' 		=> $this->request->getPost('sikap'),
			'final' 		=> $this->request->getPost('final'),
        );
        $model->updateNilai($data, $id);
        return redirect()->to(base_url('admin/nilai'));
	}
	
	public function deleteNilai()
	{
		$model = new Admin_model();
        $id = $this->request->getPost('id');
        $model->deleteNilai($id);
        return redirect()->to(base_url('admin/nilai'));
	}
	
	public function kelulusan()
	{
		$model = new Admin_model();
		$data['mahasiswa'] = $model->getMahasiswa()->getResult();
		return view('admin/kelulusan',$data);
	}

	public function editMahasiswa()
    {
        $model = new Admin_model();
        $id = $this->request->getPost('id_mahasiswa');
        $data = array(
			'mahasiswa_level'        	=> $this->request->getPost('mahasiswa_level'),
        );
        $model->editMahasiswa($data, $id);
        return redirect()->to(base_url('admin/kelulusan'));
	}

}