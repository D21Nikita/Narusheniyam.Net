<style>
    /* Стили для секции страницы */
.page {
    background-color: #004f54;
    padding: 40px 0;
}

/* Стили для контейнера */
.container {
    max-width: 500px; /* Максимальная ширина формы */
    margin: 0 auto; /* Центрирование формы */
    padding: 20px;
    background-color: #3b83bd;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

/* Стили для сообщений об ошибках */
.border-danger {
    border-color: #dc3545 !important;
}

.text-danger {
    color: #dc3545 !important;
}

/* Стили для заголовка */
h1.display-1 {
    font-size: 2.5rem; /* Размер шрифта для заголовка */
    color: #fff;
    margin-bottom: 30px;
}

/* Стили для формы регистрации */
form.needs-validation {
    background-color: #3b83bd;
    padding: 20px;
    border-radius: 8px;
}

.form-label {
    font-size: 1.2rem; /* Размер шрифта для меток */
    color: #333;
}

.form-control {
    font-size: 1rem; /* Размер шрифта для полей ввода */
    color: #555;
    background-color: #eef1f4;
    border: 1px solid #d3d9de;
}

.form-control:focus {
    border-color: #00a7a9;
    box-shadow: 0 0 0 0.2rem rgba(0, 167, 169, 0.25);
}

/* Стили для кнопки */
.btn-success {
    background-color: #004f54;
    border-color: #003840;
    border: 0px solid #d3d9de;
    color: #fff;
}

.btn-success:hover {
    background-color: #003840;
    border-color: #002a30;
}

/* Стили для адаптивности */
@media (max-width: 768px) {
    .container {
        padding: 15px;
    }
}

</style>
<?php
    session_start();
    if(isset($_SESSION['login'])){
        header("Location: /profile/");
        exit;
    }
    include "../inc/header.php";
?>

<section class="page">
    <div class="container p-3">
        <?php
            if(isset($_GET['message'])){
                echo "<div class='border border-danger text-danger text-center pt-4 pb-4 mb-3'>
                {$_GET['message']}
                </div>";
            }
        ?>
        <h1 class="text-center mb-3 display-1">Регистрация</h1>
        <form action="/admin/controllers/registration.php" method="post" class="m-auto needs-validation" novalidate>
            <div class="mb-3">
                <label for="surname" class="form-label fs-5">Фамилия</label>
                <input type="text" class="form-control shadow-sm  p-3 rounded-pill" id="surname" name="surname" required>
                <div class="invalid-feedback">
                    Поле обязательно для заполнения.
                </div>
            </div>
            <div class="mb-3">
                <label for="name" class="form-label fs-5">Имя</label>
                <input type="text" class="form-control shadow-sm  p-3 rounded-pill" id="name" name="name" required>
                <div class="invalid-feedback">
                    Поле обязательно для заполнения.
                </div>
            </div>
            <div class="mb-3">
                <label for="patronymic" class="form-label fs-5">Отчество</label>
                <input type="text" class="form-control shadow-sm  p-3 rounded-pill" id="patronymic" name="patronymic" required>
                <div class="invalid-feedback">
                    Поле обязательно для заполнения.
                </div>
            </div>
            <div class="mb-3">
                <label for="login" class="form-label fs-5">Логин</label>
                <input type="text" class="form-control shadow-sm  p-3 rounded-pill" id="login" name="login" required>
                <div class="invalid-feedback">
                    Поле обязательно для заполнения.
                </div>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label fs-5">Адрес электронной почты</label>
                <input type="email" class="form-control shadow-sm  p-3 rounded-pill" id="email" name="email" required>
                <div class="invalid-feedback">
                    Поле обязательно для заполнения.
                </div>
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label fs-5">Телефон</label>
                <input type="tel" class="form-control shadow-sm  p-3 rounded-pill" id="phone" name="phone" minlength="17" maxlength="17" pattern="\+?[0-9\(\)\-]+" placeholder="+7(XXX)-XXX-XX-XX" required>
                <div class="invalid-feedback">
                    Поле обязательно для заполнения и должно соответствовать шаблону +7(XXX)-XXX-XX-XX.
                </div>
            </div>
            <div class="mb-3>
                <label for="password" class="form-label fs-5">Пароль</label>
                <input type="password" class="form-control shadow-sm  p-3 rounded-pill" id="password" name="password" minlength="6" required>
                <div class="invalid-feedback">
                    Поле обязательно для заполнения и должно содержать не менее 6 символов.
                </div>
            </div>
            <div class="mb-3">
                <label for="password-repeat" class="form-label fs-5">Повторите пароль</label>
                <input type="password" class="form-control shadow-sm p-3 rounded-pill" id="password-repeat" name="password-repeat" minlength="6" required>
                <div class="invalid-feedback">
                    Поле обязательно для заполнения и должно содержать не менее 6 символов.
                </div>
            </div>
            <input type="submit" class="btn-success mb-3 mt-3 w-100 shadow-sm p-3 fs-2 rounded-pill fw-bold" value="Зарегистрироваться">
        </form>
    </div>
</section>

<script>
// Функция проверки совпадения паролей
function checkPasswordsMatch() {
    var password = document.getElementById("password").value;
    var confirmPassword = document.getElementById("password-repeat").value;

    if (password !== confirmPassword) {
        alert("Пароли не совпадают!");
        return false;
    }
    return true;
}
</script>

<?php
    include "../inc/footer.php";
?>
