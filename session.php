<?php
session_start();

var_dump($_SESSION['id']);
var_dump($_SESSION['tipo']);

if (isset($_GET['logout'])) {
  if ($_GET['logout'] === 'bye'){

    unset($_SESSION['id']);
    session_destroy();
    header('Location: login.php');

  }
}

//VERIFICAR SESION
  if(!isset($_SESSION['id'])){
  die(header("location: login.php"));
  }
//VERIFICAR SESION


 ?>
