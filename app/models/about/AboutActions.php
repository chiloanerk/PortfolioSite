<?php

namespace App\models\about;

use App\models\Database;

class AboutActions
{
    protected Database $db;
    public function __construct(Database $db)
    {
        $this->db = $db;
    }

    public function getAbout()
    {
        $query = 'SELECT * FROM about';
        return $this->db->fetchSingle($query);
    }

    public function getSkills()
    {
        $query = 'SELECT * FROM skills';
        return $this->db->fetchAll($query);
    }
}