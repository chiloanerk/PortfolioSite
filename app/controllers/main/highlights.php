<?php

use App\models\Database;
use App\models\highlights\HighlightsActions;

$db = new Database();
$highlights = new HighlightsActions($db);
$contents = $highlights->getPost();

$mediaFiles = [];
foreach ($contents as $content) {
    $mediaFiles[$content['id']] = $highlights->getMedia($content['id']);
}

view('main/highlights', [
    'contents' => $contents,
    'mediaFiles' => $mediaFiles]);