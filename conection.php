<?php
    require 'vendro/autoload.php';

    $dotenv = Dotenv\Dotenv::createInmutable(__DIR__);
    $dotenv->load();
    
    $con  = mysqli_connect($_ENV['DB_HOST'],$_ENV['DB_USER'],$_ENV['DB_PASSWORD'],$_ENV['DB_NAME']);
?>