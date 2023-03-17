<?php
session_start();
require_once('header.php'); 
require_once('db.php');
$id_product = $_GET['id_product'];
$select_product = "SELECT * FROM `products` WHERE `id_product` = $id_product";
$res_SP = $db->query($select_product)->fetch_assoc();
?>
    <!-- afisha -->
    <section class="afisha__section">
        <div class="afisha_one">
            <div class="container">
                <? if ($res_SP): ?>
                    <div class="afisha_one_all_body">
                        <img src="assets/images/<?=$res_SP['image']?>" class="card__afisha_one" alt="<?=$res_SP['image']?>">
                        <div class="card__afisha_body">
                            <h5 class="card-title">Название: <?=$res_SP['name']?></h5>
                            <p>Дата показа: <?=$res_SP['date']?></p>
                            <p>Возрастной ценз: <?=$res_SP['age']?></p>
                            <div class="card__text">Цена: <?=$res_SP['price']?>Р</div>
                        </div>
                    </div>
                <? endif; ?>
            </div>
        </div>
    </section>
    <!-- end afisha -->
</body>

</html>