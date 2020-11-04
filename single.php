<?php

require 'admin/config.php';
require 'functions.php';

$conectionsingle=conect($db_config);
$id_article=id_article($_GET['id']);

if(!$conectionsingle){
    header('Location: error.php');

}
if(empty($id_article)){
    header('Location:index.php');
}

$post=get_post_pher_id($conectionsingle, $id_article);
if(!$post){
    header('Location: index.php');
}

$post= $post[0];

require 'views/single.view.php';
