<?php

namespace App\models;

class VisitorCounter
{
    protected Database $db;

    public function __construct(Database $db)
    {
        $this->db = $db;
    }

    public function incrementCount()
    {
        if (!isset($_COOKIE['visited'])) {
            $query = 'SELECT count FROM visitor_count WHERE id = 1';
            $countData = $this->db->fetchSingle($query);

            if ($countData && isset($countData['count'])) {
                $count = (int)$countData['count'];
                $count++;

                $updateQuery = "UPDATE visitor_count SET count = :count WHERE id = 1";
                $params = [':count' => $count];
                $this->db->execute($updateQuery, $params);
            } else {
                $insertQuery = "INSERT INTO visitor_count (count) VALUES (1)";
                $this->db->execute($insertQuery);
                $count = 1;
            }
            setcookie('visited', 'yes', time() + 3600 * 24 * 30); // 30 day expiry
            return $count;
        }
        return null;
    }

    public function getVisitorCount()
    {
        $query = "SELECT count FROM visitor_count WHERE id = 1";
        $count = $this->db->fetchSingle($query);
        return $count ? $count['count'] : 0;
    }
}
