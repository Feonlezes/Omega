<?php
session_start();
require_once('../db.php');

$select_janre = "SELECT * FROM janre";
$res_SJ = $db->query($select_janre);
$msg = $_GET['msg'];
?>

<? require_once('header.php') ?>

<section class="add__product">
    <div class="container">
        <h1 id="reg__text">Добавить постановку</h1>
        <?php
        if(isset($msg)) {
            echo '<div class="alert alert-success">'.$msg.'</div>';
        }
        ?>
        <form action="add_product_script.php" method="POST" class="form__reg" id="form__reg" enctype="multipart/form-data">
            <label for="name">Название</label>
            <input type="text" name="name" required>
            <label for="price">Цена</label>
            <input type="text" name="price" required>
            <label for="janre">Жанр</label>
            <select name="janre">
                <? if ($res_SJ): ?>
                    <? foreach($res_SJ as $product): ?>
                        <option value="<?=$product['id_janre']?>"><?=$product['name_janre']?></option>
                    <? endforeach; ?>
                <? endif; ?>
            </select>
            <label for="date">Дата</label>
            <input type="date" name="date" required>
            <label for="age">Возрастное ограничение</label>
            <select name="age">
                <option value="6">6+</option>
                <option value="14">14+</option>
                <option value="16">16+</option>
                <option value="18">18+</option>
                <option value="21">21+</option>
            </select>
            <label for="image">Изображение</label>
            <input type="file" name="file_name" id="file_name">
            <label for="amount">Количество билетов</label>
            <input type="text" name="amount" required>
            <br>
            <button class="btn btn-primary">Добавить</button>
        </form>
    </div>
</section>

<script src="http://localhost/omega/assets/js/jquery-3.3.1.min.js"></script>
<script>
    // Ждём когда документ полностью прогрузиться
    $(document).ready(function() {
        // При клике на кнопку выполняем код
        $('#form__reg').on('submit', function(e) {
            e.preventDefault();
            // Имя
            let name = $('input[name=name]').val();
            // Цена
            let price = $('input[name=price]').val();
            // Жанр
            let janre = $('select[name=janre]').val();
            // Дата
            let date = $('input[name=date]').val();
            // Возрастное ограничение
            let age = $('select[name=age]').val();
            // Изображение
            let file_name = document.getElementById("file_name").files[0].name;
            console.log(file_name);
            // Количество билетов
            let amount = $('input[name=amount]').val();
            // Отправляем данные
            $.ajax({
                url: "add_product_script.php",
                type: "POST",
                dataType: 'text',
                data: {
                    name: name, 
                    price: price, 
                    janre: janre, 
                    date: date, 
                    age: age, 
                    file_name: file_name,
                    amount: amount
                },
                success (data) {
                    console.log(data);
                    $('#msg_error').remove();
                    $('#reg__text').after('<div class="alert alert-success" id="msg_error">Постановка добавлена</div>');
                    document.getElementById('form__reg').reset();
                }
            });
        });
    });
</script>
</body>
<html>