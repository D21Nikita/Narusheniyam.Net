<?php

    $connect = new mysqli("localhost", "root", "", "final_progectg");

    if($connect->connect_error){
        die ("Ошибка подключения к базе данных");
    }

?>