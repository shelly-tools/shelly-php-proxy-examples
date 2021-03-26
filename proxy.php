<?php
if (isset($_GET['url']) ) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_USERAGENT, 'curl');
    curl_setopt($ch, CURLOPT_TIMEOUT, 5);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_URL, $_GET['url']);
    $result = curl_exec ($ch);
    header('Content-Type: application/json');
    echo $result;
} else {
    $output = array('invalid URL');
    header('Content-Type: application/json');
    echo json_encode($output);
}