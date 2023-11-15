<?php
$title = 'My PHP Router';
$heading = 'Welcome to ';
$content = 'This is proof the router works.';
view('home/index', [
    'title' => $title,
    'heading' => $heading,
    'content' => $content
]);