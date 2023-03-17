<?php
session_start();
require_once('db.php');
require_once('header.php');

$id_product = $_POST['id_product'];
$id_user = $_SESSION['id_user'];

$select_row = "SELECT * FROM `cart` WHERE `id_product` = $id_product and `id_user` = $id_user";
$res_SR = $db->query($select_row);

if ($res_SR->num_rows >= 1) {
    $update_product = "UPDATE `cart` SET `cart_amount` = `cart_amount` + 1 WHERE `id_product` = $id_product and `id_user` = $id_user";
    $res_UP = $db->query($update_product);
} else {
    $insert_product = "INSERT INTO `cart` (`id_user`, `id_product`, `cart_amount`) VALUES ('$id_user', '$id_product', '1')";
    $res_IP = $db->query($insert_product);
}

?>