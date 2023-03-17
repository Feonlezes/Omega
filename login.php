<?php
session_start();
require_once('header.php');
?>
<!-- reg -->
<section class="reg">
    <div class="container">
        <h1 id="reg__text">Авторизация</h1>
        <div class="d-none" id="msgText"></div>
        <form method="POST" class="form__reg" id="formLogin">

            <label for="login">Логин</label>
            <input type="text" name="login" required>

            <label for="password">Пароль</label>
            <input type="password" name="password" required>

            <button class="btn btn-primary">Войти</button>
        </form>
    </div>
</section>
<!-- end reg -->
<script>
    const msgText = document.getElementById('msgText')
    const formLogin = document.getElementById('formLogin')
    const btnLoginReg = document.getElementById('btnLoginReg')
    // Форма авторизации
    formLogin.addEventListener('submit', async function(e) {
        e.preventDefault()
        const formData = new FormData(formLogin)
        const data = Object.fromEntries(formData.entries())
        const res = await fetch('login_script.php', {
            method: "POST",
            headers: {'Content-Type': 'application/json;charset=utf-8'},
            body: JSON.stringify(data)
        })
        const dataRes = await res.json()
        console.log(dataRes);
        if (dataRes.status == true) {
            btnLoginReg.innerHTML = `
            <a href="cart.php"><button class="btn btn-primary btn__left" id="btnCart">В корзину</button></a>
            <a href="logout.php"><button class="btn btn-primary btn__left" id="btnExit">Выйти</button></a>
            `
            msgText.innerHTML = dataRes.msg
            msgText.classList.remove('d-none', 'alert-danger')
            msgText.classList.add('alert', 'alert-success')
            formLogin.reset()
        } else {
            msgText.innerHTML = dataRes.msg
            msgText.classList.remove('d-none')
            msgText.classList.add('alert', 'alert-danger')
        }
    })
</script>
</body>

</html>