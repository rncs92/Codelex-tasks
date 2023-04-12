<?php declare(strict_types=1);

require_once 'Application.php';
require_once 'Video.php';
require_once 'VideoStore.php';


$videoStore = new Videostore([]);

$videoStore->addMovie('The Matrix');
$videoStore->addMovie('The Godfather Part II');
$videoStore->addMovie('Star Wars Episode IV: A New Hope');
$videos = $videoStore->getVideos();

$app = new Application($videoStore);
$app->run();
