<?php
session_start();

if ( !isset($_SESSION['username']) ){
    exit('You are not allowed');
    $util->redirect("login.php");
}