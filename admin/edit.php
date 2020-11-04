<?php
session_start();
require 'config.php';
require '../functions.php';
checkSession();
$conection=conect($db_config);
if(!$conection){
    header('Location: ../error.php');
}

if($_SERVER['REQUEST_METHOD']=='POST'){
$tittle= cleanData($_POST['tittle']);
$extract= cleanData($_POST['extract']);
$text= $_POST['text'];
$id= cleanData($_POST['id']);
$thumbsaved= $_POST['thumb-saved'];
$thumb= $_FILES['thumb'];

if(empty($thumb['name'])){
    $thumb= $thumbsaved;
}else{
    $uploaded_file='../'. $blog_config['image_folder'].$_FILES['thumb']['name'];
    move_uploaded_file($_FILES['thumb']['tmp_name'], $uploaded_file);
    $thumb= $_FILES['thumb']['name'];
}

$statement= $conection->prepare('UPDATE article set tittle=:tittle,extract=:extract,textt=:textt,thumb=:thumb where id=:id ');
$statement->execute(array(':tittle'=>$tittle,':extract'=>$extract,':textt'=>$text,':thumb'=>$thumb,':id'=>$id));
echo $thumb;
header('Location:'. RUTA.'admin');
}
else{
   $id_article= id_article($_GET['id']);
   if(empty($id_article)){
       header('Location:' .RUTA. 'admin');
   }
   $post= get_post_pher_id($conection,$id_article);
   if(!$post){
    header('Location:' .RUTA. 'admin');

   }

   $post=$post[0];
}
require '../views/edit.view.php';
