<?php
session_start();
require_once('db.php');
require_once('header.php');

$id_user = $_SESSION['id_user'];

$select_products = "SELECT * FROM `cart` INNER JOIN products USING(`id_product`) WHERE `id_user` = $id_user";
$res_SP = $db->query($select_products);
?>
<section class="cart">
    <div class="container">
        <h1>Ваша корзина:</h1>
        <div class="cards">
            <? if ($res_SP): ?>
                <? foreach($res_SP as $product): ?>
                    <div class="cart__one">
                        <div><img src="assets/images/<?=$product['image']?>" alt="<?=$product['image']?>" class="card__image"></div>
                        <div>Название: <?= $product['name'] ?></div>
                        <div>Цена: <?= $product['price'] ?>Р</div>
                        <div>Дата: <?= $product['date'] ?></div>
                        <input class="d-none" type="text" name="id_product" value="<?= $product['id_product'] ?>">
                        <div>Количество билетов: <?=$product['cart_amount']?><a href=""><button class="btn btn-primary plus" id="<?=$product['id_product']?>">+</button></a><a href=""><button class="btn btn-danger">-</button></a></div>
                    </div>
                <? endforeach; ?>
            <? endif; ?>
        </div>
    </div>
</section>
<script>
    $(document).ready(function() {
        let plus = document.querySelectorAll('.plus');
        plus.forEach(el => {
            el.addEventListener('click', function(e) {
                e.preventDefault();
                console.log('Работает');
            })
        })
    })
</script>