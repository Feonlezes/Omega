<?php
session_start();
require_once('header.php') 
?>
    <section class="section__about_us">
        <div class="about__us">
            <div class="container">
                <h1 class="section__title">Новые поставновки</h1>
                <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active" data-bs-interval="10000">
                            <div class="car__bg">
                                <div class="car__text">Постановка 4 брата</div>
                            </div>
                            <img src="assets/images/1.jpg" class="d-block w-100" alt="1">
                        </div>
                        <div class="carousel-item" data-bs-interval="2000">
                            <div class="car__bg">
                                <div class="car__text">Живой конь</div>
                            </div>
                            <img src="assets/images/2.jpg" class="d-block w-100" alt="2">
                        </div>
                        <div class="carousel-item">
                            <div class="car__bg">
                                <div class="car__text">Лысый гном</div>
                            </div>
                            <img src="assets/images/3.jpg" class="d-block w-100" alt="3">
                        </div>
                        <div class="carousel-item">
                            <div class="car__bg">
                                <div class="car__text">Женщина в чёрном</div>
                            </div>
                            <img src="assets/images/4.jpg" class="d-block w-100" alt="3">
                        </div>
                        <div class="carousel-item">
                            <div class="car__bg">
                                <div class="car__text">Крампус</div>
                            </div>
                            <img src="assets/images/5.jpg" class="d-block w-100" alt="3">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
                <img src="assets/images/logo.png" alt="logo" class="about__us_logo">
                <div class="about__us_motto">Навстречу искусству!</div>
            </div>
        </div>
    </section>
</body>

</html>