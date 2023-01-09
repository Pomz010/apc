<?php
$host = 'localhost';
$db = 'apc';
$user = 'root';
$pass = 'admin';
$dsn = "mysql:host=$host;dbname=$db;charset=UTF8";
$pdo = new PDO($dsn, $user, $pass);