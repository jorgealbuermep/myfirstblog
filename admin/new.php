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
    $extract=cleanData($_POST['extract']);
    $text=$_POST['text'];
    $thumb= $_FILES['thumb']['tmp_name'];

    echo $tittle;
    echo $extract;
    echo $text;
    echo $thumb;


    $uploaded_file='../' . $blog_config['image_folder'] . $_FILES['thumb']['name'];

    move_uploaded_file($thumb, $uploaded_file);
    $statement= $conection->prepare('INSERT INTO  article(id,tittle,extract,textt,thumb) VALUES(null,:tittle,:extract,:textt,:thumb)');
    $statement->execute(array(':tittle'=>$tittle, ':extract'=>$extract, ':textt'=>$text, ':thumb'=>$_FILES['thumb']['name']));

    header('Location:' .RUTA.'admin');
}

require '../views/new.view.php';
