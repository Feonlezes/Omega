<?php
session_start();
require_once('../db.php');
$select_products = "SELECT * FROM products";
$res_SP = $db->query($select_products);
?>
<? require_once('header.php') ?>
<!-- afisha -->
<section class="afisha__section">
    <div class="afisha">
        <div class="container">
            <div>
                <span>Упорядочить по:</span>
                <a href=""><button class="btn btn-primary">Новизне</button></a>
                <a href=""><button class="btn btn-primary">Дате показа</button></a>
                <a href=""><button class="btn btn-primary">Наименованию</button></a>
                <a href=""><button class="btn btn-primary">Возрастному цензу</button></a>
                <br>
                <br>
                <span>Отфильтровать по жанру:</span>
                <a href=""><button class="btn btn-primary">Комедия</button></a>
                <a href=""><button class="btn btn-primary">Драма</button></a>
                <a href=""><button class="btn btn-primary">Мистерия</button></a>
                <br>
                <br>
                <div class="cards">
                    <? if ($_SESSION['login'] == 'admin') : ?>
                        <? if ($res_SP) : ?>
                            <? foreach ($res_SP as $product) : ?>
                                <a href="one.php" class="cart__href">
                                    <div class="cart__one">
                                        <img src="assets/images/<?=$product['image']?>" class="card__image" alt="<?=$product['image']?>" style="width: 18rem;">
                                        <div class="card-body">
                                            <h5 class="card-title"><?=$product['name']?></h5>
                                            <p></p>
                                            <div class="cart__flex">
                                                <div class="card__text"><?=$product['price']?>Р</div>
                                                <a href="edit.php"><button class="btn btn-primary">Редактировать</button></a>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            <? endforeach; ?>
                        <? endif; ?>
                    <? endif; ?>
                </div>
            </div>
        </div>
</section>
<!-- end afisha -->
</body>

</html>