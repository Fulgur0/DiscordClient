<?php
require_once('../config.php');

$origin = $_POST['origin'];
if (empty($origin)) {
    header('Location: '.$APP_URL.'/index.php');
    exit();
}

$action = $_POST['action'];
if (empty($action)) {
    header('Location: '.$origin);
    exit();
}