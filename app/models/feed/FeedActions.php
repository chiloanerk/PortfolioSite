<?php

namespace App\models\feed;

use App\models\Database;

class FeedActions
{
    protected Database $db;
    public function __construct(Database $db)
    {
        $this->db = $db;
    }

    public function getFeed()
    {
        $query = 'SELECT * FROM feeds';
        return $this->db->fetchAll($query);
    }
}