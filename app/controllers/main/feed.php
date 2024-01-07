<?php


use App\models\blog\BlogActions;
use App\models\Database;
use App\models\feed\FeedActions;
use App\models\profile\User;

$db = new Database();
$blog = new BlogActions($db);
$posts = $blog->getAllBlogPosts();
$user = new User($db);

$userInfo = $user->getUser() ? $user->getUser() : [
    'name' => 'Name'
];

$feeds = new FeedActions($db);
$getFeed = $feeds->getFeed();

view('main/feed', [
    'getFeed' => $getFeed,
    'userInfo' => $userInfo
]);