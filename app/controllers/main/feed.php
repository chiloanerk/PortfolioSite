<?php


use App\models\blog\BlogActions;
use App\models\Database;
use App\models\feed\FeedActions;

$db = new Database();
$blog = new BlogActions($db);
$posts = $blog->getAllBlogPosts();

$feeds = new FeedActions($db);
$getFeed = $feeds->getFeed();

view('main/feed', [
    'getFeed' => $getFeed
]);