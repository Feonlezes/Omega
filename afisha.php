<?php
session_start();
require_once('db.php');
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
                <h1 id="reg__text">Постановки</h1>
                <div class="cards">
                    <? if ($_SESSION['true'] == 'true') : ?>
                        <? if ($res_SP) : ?>
                            <? foreach ($res_SP as $product) : ?>
                                <div class="cart__one" id="cart__one">
                                <a href="one.php" class="cart__href">
                                        <img src="assets/images/<?= $product['image'] ?>" class="card__image" alt="<?= $product['image'] ?>" style="width: 18rem;">
                                        <div class="card-body">
                                            <h5 class="card-title"><?= $product['name'] ?></h5>
                                </a>
                                <p></p>
                                <div class="cart__flex">
                                    <div class="card__text"><?= $product['price'] ?>Р</div>
                                    <!-- <a href="cart.php?id_product=<?= $product['id_product'] ?>" id="add_product">
                                                </a> -->
                                    
                                    <button class="btn btn-primary" id="add_product"><input class="d-none id_product" type="text" id="id_product" name="id_product" value="<?= $product['id_product'] ?>">В корзину</button>
                                </div>
                </div>
            </div>
        <? endforeach; ?>
    <? endif; ?>
<? else : ?>
    <? if ($res_SP) : ?>
        <? foreach ($res_SP as $product) : ?>
            <a href="one.php?id_product=<?= $product['id_product'] ?>" class="cart__href">
                <img src="assets/images/<?= $product['image'] ?>" class="card__image" alt="<?= $product['image'] ?>">
                <div class="card-body">
                    <h5 class="card-title"><?= $product['name'] ?></h5>
            </a>
            <div class="card__text"><?= $product['price'] ?>Р</div>
        </div>
    <? endforeach; ?>
<? endif; ?>
<? endif; ?>
    </div>
    </div>
    </div>
</section>
<!-- end afisha -->
<script>
    $(document).ready(function() {
        let buttons = document.querySelectorAll("#add_product");
        buttons.forEach(btn => {
            let id_product_take = btn.querySelector('#id_product');
            btn.addEventListener('click', function(e) {
                e.preventDefault();
                let id_product = $(id_product_take).val();
                $.ajax({
                    url: "afisha_script.php",
                    type: "POST",
                    dataType: 'text',
                    data: {
                        id_product: id_product
                    },
                    success(data) {
                        $('#reg__text').after('<div class="alert alert-success" id="msg_error">Добавлено в корзину</div>');
                        function removeEl() {
                            $('#msg_error').remove();
                        }
                        setTimeout(removeEl, 3000);
                    }
                })
            })
        })
    })
</script>
</body>

</html>