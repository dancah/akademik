<?php namespace App\Controllers;
use App\Models\home_model;

class home extends BaseController
{
    public function __construct()
	{
		helper('form');
		$this->Home_model = new Home_model();
	}

	public function index()
	{
		return view('home/home');
	}

	public function persyaratan()
	{
		return view('home/persyaratan');
	}

	public function pendaftaran()
	{
		return view('home/pendaftaran');
	}
	
	public function save_register()
	{
		// Jika valid
		$model = new Home_model();
		
		$data = array(
            'email'       	=> $this->request->getPost('email'),
			'nama'			=> $this->request->getPost('nama'),
			'created_at'	=> date('Y-m-d H:i:s'),
			'updated_at'	=> date('Y-m-d H:i:s'),
			'level' 		=> '3',
		);
		$id = $model->addUser($data);

		$no_pendaftaran = $this->Home_model->noPendaftaran();
		$data1 = array(
			'mahasiswa_level'	=> 'Daftar',
			'no_pendaftaran'	=> $no_pendaftaran,
			'lokasi'			=> $this->request->getPost('lokasi'),
			'nama'				=> $this->request->getPost('nama'),
			'tmpt_lahir'		=> $this->request->getPost('tmpt_lahir'),
			'tgl_lahir'			=> $this->request->getPost('tgl_lahir'),
			'alamat'			=> $this->request->getPost('alamat'),
			'jenis_kelamin'		=> $this->request->getPost('jenis_kelamin'),
			'hp'				=> $this->request->getPost('hp'),
			'email'				=> $this->request->getPost('email'),
			'agama'				=> $this->request->getPost('agama'),
			'tinggi'			=> $this->request->getPost('tinggi'),
			'berat'				=> $this->request->getPost('berat'),
			'facebook'			=> $this->request->getPost('facebook'),
			'instagram'			=> $this->request->getPost('instagram'),
			'foto'				=> $this->request->getPost('foto'),
			'pendidikan'		=> $this->request->getPost('pendidikan'),
			'sekolah'			=> $this->request->getPost('sekolah'),
			'jurusan'			=> $this->request->getPost('jurusan'),
			'tamat'				=> $this->request->getPost('tamat'),
			'nama_ortu'			=> $this->request->getPost('nama_ortu'),
			'pekerjaan_ortu'	=> $this->request->getPost('pekerjaan_ortu'),
			'alamat_ortu'		=> $this->request->getPost('alamat_ortu'),
			'hp_ortu'			=> $this->request->getPost('hp_ortu'),
			'program_class'		=> $this->request->getPost('program_class'),
			'referal'			=> $this->request->getPost('referal'),
			'id_user' 			=> $id,
		);
		$id = $model->getPendaftaran($data1);

		session()->setFlashdata('pesan', 'Register Berhasil!');
		return redirect()->to(base_url('home/detail'));

		// Jika tidak valid
		session()->setFlashdata('errors', \Config\Services::validation()->getErrors());
		return redirect()->to(base_url('home/pendaftaran'));
	}

	public function detail()
	{
		$id = $this->request->getGet('id_mahasiswa');
		
        $data['mahasiswa'] = $this->Home_model->getDetail($id);
        echo view('home/detail', $data);
	}

	public function pengumuman()
	{
		return view('home/pengumuman');
	}

    public function pengumuman1()
	{
		$no_pendaftaran = $this->request->getPost('no_pendaftaran');
		$nama 			= $this->request->getPost('nama');
		$tgl_lahir 		= $this->request->getPost('tgl_lahir');
		$a = $this->Home_model->getPengumuman($no_pendaftaran, $nama, $tgl_lahir);
		$data['mahasiswa'] = $a;

		//$id_mahasiswa  = $this->request->getPost('id_mahasiswa');
      
        
        //$data1['mahasiswa1'] = $this->Home_model->getKelulusan($id_mahasiswa);
		if ($a == TRUE){
			return view('home/pengumuman_1', $data);
			}else{
			  return view('home/pengumuman');
			}
        
      
	}

	public function daftar_ulang()
	{
		$no_pendaftaran = $this->request->getPost('no_pendaftaran');
		$a = $this->Home_model->getDetail2($no_pendaftaran);
		$data['mahasiswa'] = $a;

		if ($a == TRUE){
			return view('home/pendaftaran_ulang1', $data);
			}else{
			  return view('home/pendaftaran_ulang');
			}
        
      
	}
	public function daftar_ulang2()
	{
		$no_pendaftaran = $this->request->getPost('no_pendaftaran');
		$a = $this->Home_model->getDetail2($no_pendaftaran);
		if($a['mahasiswa_level'] == "aktif"){

			$data['daftar_ulang'] = $a['daftar_ulang'] = 1;	
			$query =$this->Home_model->updatedaftar($data,$no_pendaftaran);
			
				if ($query == TRUE){

					$id_ortu = 'P'.$a['nim'];
					$id_mhs = $a['id_mahasiswa'];
					$nama_ortu = $a['nama_ortu'];
					$pekerjaan = $a['pekerjaan_ortu'];
					$hp = $a['hp_ortu'];
					$alamat = $a['alamat_ortu'];
					$email = $a['nama_ortu'].'@gmail.com';
					

					$data2 = array(
						'nama' =>$nama_ortu,
						'username' =>$id_ortu,
						'email' =>$email,
						'password' =>$id_ortu,
						'level' =>'2'
						
					);

					
					$save1 = $this->Home_model->addUser($data2);

					if($save1 == TRUE){

						$b = $this->Home_model->getDetail3($id_ortu);

						$data1 = array(
							'id_orangtua' =>$id_ortu,
							'id_mahasiswa' =>$id_mhs,
							'nama' =>$nama_ortu,
							'alamat' =>$pekerjaan,
							'hp' =>$hp,
							'pekerjaan' =>$alamat,
							'id_user' => $b['id_user']
						);

						$save = $this->Home_model->addOrtu($data1);
					}
					
					

					return redirect()->to(base_url('home/pendaftaran_ulang'));
					}else{
						return redirect()->to(base_url('home/pendaftaran_ulang'));
					}

        }else{
			echo "Tidak Dapat Daftar Ulang";
			return redirect()->to(base_url('home/pendaftaran_ulang'));
			
		}
      
	}

	//public function cekKelulusan() {
       
    //    $id_mahasiswa  = $this->request->getPost('id_mahasiswa');
      
        
    //    $data['mahasiswa1']               = $this->Home_model->getKelulusan($id_mahasiswa);
        
	//	echo view('home/pengumuman', $data);
    //}

    public function pendaftaran_ulang()
	{
		return view('home/pendaftaran_ulang');
	}

}