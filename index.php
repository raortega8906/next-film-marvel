<?php

require_once 'function.php';

if (isset($_GET['date'])) {
    $date = $_GET['date'];
    $API_URL = 'https://whenisthenextmcufilm.com/api?date=' . $date;
} else {
    $API_URL = 'https://whenisthenextmcufilm.com/api';
}

$data = get_data($API_URL);

$days_until = $data['days_until'];
$overview = $data['overview'];
$poster_url = $data['poster_url'];
$release_date = $data['release_date'];
$title = $data['title'];

$following_production_days_until = $data['following_production']['days_until'];
$following_production_overview = $data['following_production']['overview'];
$following_production_poster_url = $data['following_production']['poster_url'];
$following_production_release_date = $data['following_production']['release_date'];
$following_production_title = $data['following_production']['title'];

include 'sections/head.php';
include 'sections/body.php';

