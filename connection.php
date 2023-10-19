<?php 
    $db_host = "db";
    $db_user = "root";
    $db_password = "MYSQL_ROOT_PASSWORD";
    $db_name = "lertluck";

    try {
        $db = new PDO("mysql:host={$db_host};dbname={$db_name}", $db_user, $db_password);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e) {
        $e->getMessage();
    }

?>