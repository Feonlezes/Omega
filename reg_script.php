<?php
require_once('db.php');

$data = json_decode(file_get_contents('php://input'), true);

$name = $data['name'];
$surname = $data['surname'];
$login = $data['login'];
$email = $data['email'];
$password = $data['password'];
$password_repeat = $data['password_repeat'];

if ($password == $password_repeat) {
    $insert_user = "INSERT INTO `users` (`name`, `surname`, `login`, `email`, `password`) VALUES ('$name', '$surname', '$login', '$email', '$password')";
    $res_IU = $db->query($insert_user);
    echo json_encode([
        'status' => true,
        'msg' => 'Вы успешно зарегестрировались'
    ]);
} else {
    echo json_encode([
        'status' => false,
        'msg' => 'Пароли не совпадают'
    ]);
}


?>
