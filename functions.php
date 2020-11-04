<?php
//require 'admin/config.php';
function conect($db_config){
    try{
        $conection= new PDO('mysql:host=localhost;dbname='.$db_config['db'], $db_config['user'], $db_config['pass']);
        return $conection;
    }
    catch(PDOExeption $e){
     return false;
    }
}

function CleanData($data){

    $data= trim($data);
    $data= stripcslashes($data);
    $data= htmlspecialchars($data);
    return $data;

}

function current_page(){
  return isset($_GET['p']) ? (int)$_GET['p'] : 1;
}


function getPost($post_pher_page, $conection){
    $init=(current_page()>1) ? current_page() * $post_pher_page - $post_pher_page : 0;
    $statement=$conection->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM article LIMIT $init, $post_pher_page");
    $statement-> execute();
    return $statement->fetchAll();
}

function num_pages($post_pher_page, $conection){
$total_post= $conection->prepare("SELECT FOUND_ROWS() as total");
$total_post->execute();
$total_post= $total_post->fetch()['total'];
$num_pages= ceil($total_post / $post_pher_page);
return $num_pages;
}

function Adate($date){
    $timestamp= strtotime($date);
    $months=['January','February','March','April','May','June','July','August','September','October','November','December'];
    $day= date('d',$timestamp);
    $month= date('m',$timestamp)-1;
    $year= date('y',$timestamp);
$date= "$months[$month].$day.$year";
return $date;
}

function id_article($id){
return (int)CleanData($id);
}

function get_post_pher_id($conection, $id){
    $result= $conection->query("SELECT * FROM  article WHERE id= $id LIMIT 1");
    $result= $result->fetchAll();
    return ($result) ? $result: false;
}

function checkSession(){
    if(!isset($_SESSION['admin'])){
        header('Location:' .RUTA);
    }
}

