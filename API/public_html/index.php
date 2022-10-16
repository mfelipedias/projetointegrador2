<?php

require_once '../vendor/autoload.php';


$uri=parse_url($_SERVER['REQUEST_URI'])['path'];
$url= explode('/', $_GET['url']=$uri);
var_dump($url);
