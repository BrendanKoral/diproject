<?php

$page = $_GET['page'];

function getData($page) {
    $file = file_get_contents("data.json");
    $json = json_decode($file, true);
    return $json[$page];
}

function displayView($page) {
//     echo '<h1>'.$page['header'].'</h1>';
//     echo $page['body'];

    echo json_encode($page['header']);
    echo json_encode($page['body']);
}

$json = getData($page);
displayView($json);