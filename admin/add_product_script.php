<?php
require_once('../db.php');

$name = $_POST['name'];
$price = $_POST['price'];
$janre = $_POST['janre'];
$date = $_POST['date'];
$age = $_POST['age'];
$img = $_POST['file_name'];
// $image = "../assets/images/" . $_FILES["file_name"]["name"];
// $img = $_FILES['file_name']['name'];
// move_uploaded_file($_FILES["file_name"]["tmp_name"], $image);
$amount = $_POST['amount'];

$insert_product = "INSERT INTO `products` (`name`, `price`, `id_janre`, `date`, `age`, `image`, `amount`) VALUES ('$name', '$price', '$janre', '$date', '$age', '$img', '$amount')";
$res_IP = $db->query($insert_product);
echo $img;
?>