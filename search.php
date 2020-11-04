<?php
require 'admin/config.php';
require 'functions.php';

$conection=conect($db_config);
if(!$conection){
    header('Location: error.php');
}

if($_SERVER['REQUEST_METHOD']=='GET' && !empty($_GET['search'])){
    $search= cleanData($_GET['search']);

    $statement= $conection->prepare("SELECT * from article where tittle like :search or textt like :search");
    $statement->execute(array('search'=>"%$search%"));
    $results= $statement->fetchAll();

    if(empty($results)){
        $tittle='no results for: ' . $search;

    }else{
        $tittle='results for: ' . $search;

    }
}
else{
    header('Location:index.php');
}
 require 'views/search.view.php';
?>
