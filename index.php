<?php 

require_once 'vendor/autoload.php';

$f3=\Base::instance();

$f3->config('config.ini');

$f3->route('GET /', function(){
    echo "First page.";
});

$f3->run();