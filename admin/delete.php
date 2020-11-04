<?php
session_start();
require 'config.php';
require '../functions.php';
checkSession();
$conection=conect($db_config);
if(!$conection){
    header('Location: ../error.php');
}
$id= cleanData($_GET['id']);
if(!$id){
    header('Location:'.RUTA.'admin');
}

$statement= $conection->prepare('DELETE  from article where id= :id');
$statement->execute(array(':id'=>$id));
header('Location:'.RUTA.'ADMIN');
