<?php

use App\models\blog\BlogActions;
use App\models\Database;

$db = new Database();
$blog = new BlogActions($db);
$posts = $blog->getAllBlogPosts();

view('main/blog', [
    'posts' => $posts
]);