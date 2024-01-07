<?php

namespace App\models\highlights;

use App\models\Database;

class HighlightsActions
{
    protected Database $db;
    public function __construct(Database $db)
    {
        $this->db = $db;
    }

    public function getPost()
    {
        $query = "SELECT * FROM highlights";
        return $this->db->fetchAll($query);
    }

    public function getMedia($post_id)
    {
        $query = "SELECT filename FROM `highlights-media` WHERE id = :post_id";
        $params = [':post_id' => $post_id];
        return $this->db->fetchAll($query, $params);
    }
}