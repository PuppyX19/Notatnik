<?php
session_start();
if(!isset($_SESSION['logged_in'])) {
    $url = "http://$_SERVER[HTTP_HOST]";
    header("Location: {$url}/login");
}