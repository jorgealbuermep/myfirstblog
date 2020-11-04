<?php
require 'admin/config.php';
require 'functions.php';

$conection=conect($db_config);
if(!$conection){
    header('Location: error.php');
}

$posts= getPost($blog_config['post_pher_page'], $conection);
if(!$posts){
    header('Location: error.php');
}


require 'views/index.view.php';
