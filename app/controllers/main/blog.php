<?php

use App\models\blog\BlogActions;
use App\models\Database;

$db = new Database();
$blog = new BlogActions($db);
$posts = $blog->getAllBlogPosts();

foreach ($posts as $post) {
    $post['excerpt'] = truncateText($post['content'], 500);
}

view('main/blog', [
    'posts' => $posts,
    'excerpt' => $post['excerpt']
]);