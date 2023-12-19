<?php

namespace App\models\profile;

use App\models\Database;

class User
{
    protected Database $db;
    public function __construct(Database $db)
    {
        $this->db = $db;
    }

    public function getUser()
    {
        $query = 'SELECT * FROM user';
        return $this->db->fetchSingle($query);
    }

    public function getSocials()
    {
        $query = 'SELECT * FROM socials';
        return $this->db->fetchSingle($query);
    }
}