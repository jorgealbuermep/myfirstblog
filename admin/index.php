<?php
session_start();
require 'config.php';
require '../functions.php';
 $conection= conect($db_config);

 checkSession();
 if(!$conection){
     header('Location:../error.php');
 }
$posts= getPost($blog_config['post_pher_page'], $conection);

require '../views/admin_index.view.php';
