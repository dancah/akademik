<?php namespace App\Models;

use CodeIgniter\Model;

class home_model extends Model
{
  public function getPendaftaran($data)
  {
    $query = $this->db->table('mahasiswa')->insert($data);
    $insert_id = $this->db->insertID();
    return $insert_id;
  }

  public function id_user($data)
  {
    $id_user = $this->db->table('user')->where(array('email'=>$data));
    return $id_user->get();
  }
  public function updatedaftar($data, $no_pendaftaran)
  {
      $query = $this->db->table('mahasiswa')->update($data, array('no_pendaftaran' => $no_pendaftaran));
      return $query;
     
  }
  public function addOrtu($data)
  {
    $query = $this->db->table('orang_tua')->insert($data);
    return $query;
  }

  public function getDetail($id)
  {
    //$query = $this->db->table('mahasiswa')->where(['nim' => $id]);
    //return $query->get();

    $builder = $this->db->table('mahasiswa');
    $query = $builder->getWhere(['id_mahasiswa' => $id]);
    return $query->getRowArray();
  }
  public function getDetail2($no_pendaftaran)
  {
  
    $builder = $this->db->table('mahasiswa');
    $query = $builder->getWhere(['no_pendaftaran' => $no_pendaftaran]);
    return $query->getRowArray();
  }
  public function getDetail3($username)
  {
  
    $builder = $this->db->table('user');
    $query = $builder->getWhere(['username' => $username]);
    return $query->getRowArray();
  }

  public function getPengumuman($no_pendaftaran, $nama, $tgl_lahir)
  {
    $builder = $this->db->table('mahasiswa');
    $query = $builder->getWhere(['no_pendaftaran' => $no_pendaftaran,'nama' => $nama,'tgl_lahir' => $tgl_lahir]);
 
    return $query->getRowArray();
  
  }

  public function addUser($data)
  {
    $query = $this->db->table('user')->insert($data);
    $insert_id = $this->db->insertID();
    return $insert_id;
  }



  public function noPendaftaran()
  {
    $kode = $this->db->table('mahasiswa')
    ->select('RIGHT(no_pendaftaran,4) as no_pendaftaran', false)
    ->orderby('no_pendaftaran', 'DESC')
    ->limit(1)->get()->getRowArray();

    if ($kode['no_pendaftaran'] == null) {
      $no = 1;
    } else {
      $no = intval($kode['no_pendaftaran']) + 1;
    }

    $tgl = date('Ymd');
    $batas = str_pad($no, 4, "0", STR_PAD_LEFT);
    $no_pendaftaran = $tgl . $batas;
    return $no_pendaftaran;
  }
  
  public function getKelulusan($id)
  {
    $builder = $this->db->table('mahasiswa');
    $query = $builder->getWhere(['id_mahasiswa' => $id]);
    return $query->getRowArray();
  }

}