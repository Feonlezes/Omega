<?php
session_start();
require_once('db.php');

$data = json_decode(file_get_contents('php://input'), true);

$login = $data['login'];
$password = $data['password'];

$select_user = "SELECT * FROM `users` WHERE `login` = '$login'";
$res_SU = $db->query($select_user)->fetch_assoc();

if ($login == $res_SU['login'] and $password == $res_SU['password']) {
    $_SESSION['status'] = true;
    $_SESSION['true'] = true;
    $_SESSION['login'] = $login;
    $_SESSION['id_user'] = $res_SU['id_user'];
    echo json_encode([
        'status' => true,
        'msg' => 'Вы успешно авторизовались'
    ]);
} else {
    $_SESSION['status'] = false;
    echo json_encode([
        'status' => false,
        'msg' => 'Неправильный логин или пароль'
    ]);
}

?>
