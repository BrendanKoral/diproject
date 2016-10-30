<?php

$page = $_GET['page'];

function getData($page) {

    var_dump($page);

    $file = file_get_contents("data.json");
    $json = json_decode($file, true);
    return $page;
}

function displayView($page) {
    echo '<h1>'.$page['header'].'</h1>';
    echo $page['body'];
    
    echo json_encode($page);
}

$json = getData($page);    
displayView($json);