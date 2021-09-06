<?php namespace App\Models;

use CodeIgniter\Model;

class Dosen_model extends Model
{
     
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
    
    public function getMahasiswa()
    {
        $query = $this->db->table('mahasiswa');
        return $query->get();
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

    public function getStudent()
    {
        $query = $this->db->table('student_log');
        return $query->get();
    }
   
    public function addStudentRecord($data){
        $query = $this->db->table('student_log')->insert($data);
        return $query;
    }
    public function updateStudentRecord($data, $id)
    {
        $query = $this->db->table('student_log')->update($data, array('id' => $id));
        return $query;
       
    }
    public function deleteStudentRecord($id)
    {
        $query = $this->db->table('student_log')->delete(array('id' => $id));
        return $query;
    }

    public function getLogBook()
    {
        $query = $this->db->table('logbook');
        return $query->get();
    }
   
    public function addLogBook($data){
        $query = $this->db->table('logbook')->insert($data);
        return $query;
    }

    public function updateLogBook($data, $id)
    {
        $query = $this->db->table('logbook')->update($data, array('id' => $id));
        return $query;
       
    }
    
    public function deleteLogBook($id)
    {
        $query = $this->db->table('logbook')->delete(array('id' => $id));
        return $query;
    }
    

}