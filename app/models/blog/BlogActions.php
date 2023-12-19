<?php

namespace App\models\blog;

use App\models\Database;

class BlogActions
{
    protected Database $db;
    public function __construct(Database $db)
    {
        $this->db = $db;
    }

    public function getBlogPost($postId)
    {
        $query = 'SELECT * FROM posts WHERE id = ?';
        return $this->db->fetchSingle($query, $postId);
    }

    public function getAllBlogPosts()
    {
        $query = 'SELECT * FROM posts';
        return $this->db->fetchAll($query);
    }

    public function createBlogPost($title, $content)
    {
        $query = 'INSERT INTO posts (title, content) VALUES (?, ?)';
        $success = $this->db->execute($query, [$title, $content]);
        if ($success) {
            return $this->db->getLastInsertId();
        } else {
            return false;
        }
    }

    public function updateBlogPost($id, $title, $content)
    {
        $query = 'UPDATE posts SET title = ?, content = ? WHERE id = ?';
        $this->db->execute($query, [$title, $content, $id]);
        return true;
    }
}