<?php
session_start();
if ($_SESSION['login'] != 'admin') {
    header("Location: ../index.php");
}
require_once('header.php'); 
?>