<?php namespace App\Models;

use CodeIgniter\Model;

class Mahasiswa_model extends Model
{
  
    public function getProfile($id)
    {
        $builder = $this->db->table('mahasiswa');
        $query = $builder->getWhere(['nim' => $id]);
        return $query->getRowArray();

        //$query = $this->db->table('mahasiswa')->where(['nim' => $id]);
        //return $query->get();
    }
    
    public function getModul()
    {
        $query = $this->db->table('modul');
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

    public function getPStudi()
    {
        $query = $this->db->table('program_studi');
        return $query->get();
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

    public function getTranskrip()
    {
        $query = $this->db->table('nilai');
        return $query->get();
    }

    public function getMatkul()
    {
        $query = $this->db->table('mata_kuliah');
        return $query->get();
    }
}