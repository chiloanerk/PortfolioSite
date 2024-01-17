<?php

use App\models\blog\BlogActions;
use App\models\Database;
$post_id = $_GET['id'];
$db = new Database();
$blog = new BlogActions($db);
$post = $blog->getBlogPost($post_id);

$title = $post['title'];
$content = $post['content'];
$timestamp = $post['timestamp'];

view('main/blog_post', [
    'post' => $post,
    'title' => $title,
    'content' => $content,
    'timestamp' => $timestamp
]);