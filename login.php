<?php session_start();
require 'admin/config.php';
require 'functions.php';

if( $_SERVER['REQUEST_METHOD']=='POST'){
$user= cleanData($_POST['user']);
$pass= cleanData($_POST['password']);

if($user==$blog_admin['user'] && $pass== $blog_admin['password']){
  $_SESSION['admin']=$blog_admin['user'];
  header('Location:'. RUTA .'admin');
}

}
require 'views/login.view.php';
