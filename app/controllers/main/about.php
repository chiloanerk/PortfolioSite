<?php

use App\models\about\about\AboutActions;
use App\models\Database;
use App\models\profile\User;

$db = new Database();
$about = new AboutActions($db);
$user = new User($db);

$userData = $user->getUser() ? $user->getUser() : [
    'email' => 'email@example.com'
];

$aboutData = $about->getAbout() ? $about->getAbout() : [
    'intro' => 'The is where your intro paragraph goes',
    'experience' => 'Your experience goes here',
];

view('main/about', [
    'aboutData' => $aboutData,
    'userData' => $userData
]);