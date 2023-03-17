<? require_once('header.php') ?>
<!-- reg -->
<section class="reg">
    <div class="container">
        <h1>Регистрация</h1>
        <div class="d-none" id="msgText"></div>
        <form method="POST" class="form__reg" id="formReg">

            <label for="name">Имя</label>
            <input type="text" name="name" class="name" required>

            <label for="surname">Фамилия</label>
            <input type="text" name="surname" required>

            <label for="login">Логин</label>
            <input type="text" name="login" required>

            <label for="email">Почта</label>
            <input type="email" name="email" required>

            <label for="password">Пароль</label>
            <input type="password" name="password" required>

            <label for="password_repeat">Повторите пароль</label>
            <input type="password" name="password_repeat" required>
            
            <label for="rules">Согласие с правилами регистрации<input type="checkbox" name="rules" class="rules"></label>
            <button class="btn__reg btn btn-primary">Зарегестрироваться</button>
        </form>
    </div>
</section>
<!-- end reg -->
<script>
    const formReg = document.getElementById('formReg')
    const msgText = document.getElementById('msgText')

    // Форма регистрации
    formReg.addEventListener('submit', async function(e) {
        e.preventDefault()
        // Formdata - это объект содержащий все элементы формы
        const formData = new FormData(formReg)
        const data = Object.fromEntries(formData.entries())
        const res = await fetch('reg_script.php', {
            method: "POST",
            headers: {"Content-Type": "application/json;charset=utf-8"},
            body: JSON.stringify(data)
        })
        const dataRes = await res.json()
        if (dataRes.status == true) {
            msgText.innerHTML = dataRes.msg
            msgText.classList.remove('d-none', 'alert-danger')
            msgText.classList.add('alert', 'alert-success')
            formReg.reset()
        } else {
            msgText.innerHTML = dataRes.msg
            msgText.classList.remove('d-none')
            msgText.classList.add('alert', 'alert-danger')
        }
    })
</script>
</body>

</html>