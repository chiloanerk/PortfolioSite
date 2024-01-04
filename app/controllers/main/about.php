<?php

use App\models\about\AboutActions;
use App\models\Database;
use App\models\profile\User;

$db = new Database();
$about = new AboutActions($db);
$user = new User($db);

$userInfo = $user->getUser() ? $user->getUser() : [
    'email' => 'email@example.com'
];

$aboutInfo = $about->getAbout() ? $about->getAbout() : [
    'intro' => 'The is where your intro paragraph goes',
    'experience' => 'Your experience goes here',
];

view('main/about', [
    'aboutInfo' => $aboutInfo,
    'userInfo' => $userInfo
]);