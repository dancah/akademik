<?php

namespace App\Models;

use CodeIgniter\Model;

class Auth_model extends Model
{
    public function login_user ($username, $password)
    {
        return $this->db->table('user')->where([
            'username'  => $username,
            'password'  => $password
        ])->get()->getRowArray();
    }

}