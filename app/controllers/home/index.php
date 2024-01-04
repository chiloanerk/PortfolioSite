<?php

use App\models\Database;
use App\models\profile\User;

$title = 'My Portfolio';

$db = new Database();
$user = new User($db);

// Default values for when user information is not set
// in the database.
$userInfo = $user->getUser() ? $user->getUser() : [
    'name' => 'Name',
    'surname' => 'Surname',
    'country' => 'Country',
    'state' => 'State',
    'summary' => '<span>Your career summary goes here.</span><br><span class="text-red-500"> You need to add your details in the database</span>'
];

$userSocials = $user->getSocials() ? $user->getSocials() : [
    'twitter' => '',
    'linkedin' => '',
    'github' => ''
];

view('home/index', [
    'title' => $title,
    'userInfo' => $userInfo,
    'userSocials' => $userSocials
]);