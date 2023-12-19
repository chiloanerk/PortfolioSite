<?php

use App\models\Database;
use App\models\profile\User;

$title = 'My Portfolio';

$db = new Database();
$user = new User($db);

$userInfo = $user->getUser();

view('home/index', [
    'title' => $title,
    'userInfo' => $userInfo
]);