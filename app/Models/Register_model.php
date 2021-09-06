<?php

namespace App\Models;

use CodeIgniter\Model;

class Register_model extends Model
{
    public function save_register($data)
    {
        $this->db->table('user')->insert($data);
    }
   
}