<?php namespace App\Models;

use CodeIgniter\Model;

class Admin_model extends Model
{
     
    //====TABEL USER
    public function getPegawai()
    {
        $query = $this->db->table('pegawai');
        return $query->get();
    }

    public function addUser($data){
        $query = $this->db->table('user')->insert($data);
        $insert_id = $this->db->insertID();
        return $insert_id;
    }

   // public function id_user($data){
    //    $id_user = $this->db->table('user')->where(array('id_user'=>$data));
    //    return $id_user->get();
        
   // }

    public function addPegawai($data){
        $query = $this->db->table('pegawai')->insert($data);
        return $query;
    }

    public function updateUser($data, $id)
    {
        $query = $this->db->table('user')->update($data, array('id_pegawai' => $id));
        return $query;
       
    }
    public function updatePegawai($data, $id)
    {
        $query = $this->db->table('pegawai')->update($data, array('id_pegawai' => $id));
        return $query;
       
    }

    public function deleteUser($id_pegawai)
    {
        $query = $this->db->table('pegawai')->delete(array('id_pegawai' => $id_pegawai));
        return $query;
    }
    
   //====END TABEL USER

   //====TABEL MATKUL

    public function getMatkul()
    {
        $query = $this->db->table('mata_kuliah');
        return $query->get();
    }

    public function addMatkul($data){
        $query = $this->db->table('mata_kuliah')->insert($data);
        return $query;
    }

    public function updateMatkul($data, $id)
    {
        $query = $this->db->table('mata_kuliah')->update($data, array('id_mata_kuliah' => $id));
        return $query;
       
    }
 
    public function deletematkul($id)
    {
        $query = $this->db->table('mata_kuliah')->delete(array('id_mata_kuliah' => $id));
        return $query;
    }

   //====END TABEL MATKUL

    public function getProfile()
    {
        $query = $this->db->table('pegawai')->where(array('pegawai_level'=>'admin'));
        return $query->get();
    }

    public function getProgramStudi()
    {
        $query = $this->db->table('program_studi');
        return $query->get();
    }
    public function getDosen()
    {
        $query = $this->db->table('pegawai')->where(array('pegawai_level'=>'1'));
        return $query->get();
    }
    public function getStudent()
    {
        $query = $this->db->table('student_log');
        return $query->get();
    }
   
    public function getMahasiswa()
    {
        $query = $this->db->table('mahasiswa');
        return $query->get();
    }

    public function addStudentLog($data){
        $query = $this->db->table('student_log')->insert($data);
        return $query;
    }
    public function updateStudentLog($data, $id)
    {
        $query = $this->db->table('student_log')->update($data, array('id' => $id));
        return $query;
       
    }
    public function deleteStudentLog($id)
    {
        $query = $this->db->table('student_log')->delete(array('id' => $id));
        return $query;
    }
    public function getModul()
    {
        $query = $this->db->table('modul');
        return $query->get();
    }
    public function addModul($data){
        $query = $this->db->table('modul')->insert($data);
        return $query;
    }
    public function updateModul($data, $id)
    {
        $query = $this->db->table('modul')->update($data, array('id' => $id));
        return $query;
       
    }
    public function deleteModul($id)
    {
        $query = $this->db->table('modul')->delete(array('id' => $id));
        return $query;
    }
    public function detailModul($id)
    {
        $query = $this->db->table('modul')->where(array('id' => $id));
        $query->get();
    }

    public function getNilai()
    {
        $query = $this->db->table('nilai');
        return $query->get();
    }
    public function addNilai($data){
        $query = $this->db->table('nilai')->insert($data);
        return $query;
    }
    public function updateNilai($data, $id)
    {
        $query = $this->db->table('nilai')->update($data, array('id' => $id));
        return $query;
       
    }
    public function deleteNilai($id)
    {
        $query = $this->db->table('nilai')->delete(array('id' => $id));
        return $query;
    }

    public function editMahasiswa($data, $id)
    {
        $query = $this->db->table('mahasiswa')->update($data, array('id_mahasiswa' => $id));
        return $query;
       
    }
}