<style>
    /* Стили для основного содержимого */
main {
    background-color: #004f54;
    padding: 20px;
    min-height: 80vh; /* Высота основного содержимого */
}


/* Стили для контейнера */
.container-fluid {
    max-width: 1200px;
    margin: auto;
    padding: 0 15px;
}

/* Стили для логотипа */
.navbar-brand {
    font-size: 1.5em; /* Размер шрифта для логотипа */
    color: #00a7a9;
    font-weight: bold;
}

/* Стили для элементов навигации */
.nav-item {
    margin: 0 10px;
}

.nav-link {
    color: #ffffff;
    font-size: 1.2em; /* Размер шрифта для ссылок */
    transition: background-color 0.3s ease;
}

.nav-link:hover,
.nav-link:focus {
    background-color: #007b7d;
    border-radius: 5px;
    padding: 5px 10px;
}

/* Стили для кнопки навигации на мобильных устройствах */
.navbar-toggler {
    border: none;
    background-color: transparent;
}

.navbar-toggler:focus,
.navbar-toggler:active {
    outline: none;
}

/* Стили для выпадающего меню */
.dropdown-menu {
    background-color: #004f54;
    border: none;
}

.dropdown-item {
    color: #ffffff;
    transition: background-color 0.3s ease;
}

.dropdown-item:hover,
.dropdown-item:focus {
    background-color: #007b7d;
}


/* Адаптивность для различных размеров экранов */
@media (max-width: 992px) {
    .navbar-expand-lg .navbar-nav .nav-link {
        padding-left: 0.5rem;
        padding-right: 0.5rem;
    }
}

@media (max-width: 768px) {
    .navbar-expand-lg .navbar-toggler {
        padding: 0.25rem 0.5rem;
    }

    .navbar-expand-lg .navbar-collapse {
        border-top: 1px solid #00a7a9;
    }

    .navbar-expand-lg .navbar-nav .nav-link {
        padding: 10px 15px;
    }
}

</style>
<?php
    session_start();
    include "inc/header.php";
?>
<body class="bg-success">

<div class="container p-3 text-center">
    <h1 class="mt-3 mb-4 text-white display-1">Нарушениям.Нет</h1>
    <p class="p-1 pt-4 display-6 text-light">Наш портал представляет собой информационную систему для помощи полиции по своевременной фиксации нарушений правил дорожного движения.</p>
</div>
<div class="container p-2 mb-5 text-center">
    <a href="/auth/" class="btn btn-success text-success-emphasis bg-light w-75 p-3 fs-2 rounded-pill fw-bold shadow-lg">Подать заявление</a>
    <h2 class="display-4 mt-5 text-white">Помоги сделать нашу страну безопаснее!</h2>
</div>
<?php
    include "inc/footer.php";
?>