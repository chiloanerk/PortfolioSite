<?php

use App\models\Database;
use App\models\profile\User;
use App\models\VisitorCounter;

$title = 'My Portfolio';

$db = new Database();
$user = new User($db);

$visitorCounter = new VisitorCounter($db);

// Increment the visitor count if necessary
$visitorCount = $visitorCounter->incrementCount();

// Retrieve the updated visitor count
$count = $visitorCounter->getVisitorCount();

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
    'userSocials' => $userSocials,
    'count' => $count
]);