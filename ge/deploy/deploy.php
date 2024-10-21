
<?php

    require_once 'deploy/db_config.php';

    $db = new PDO(
            "mysql:host=".MYSQL_HOST.
            ";dbname=".MYSQL_DBNAME.
            ";charset=utf8", MYSQL_USER, MYSQL_PASS);
    $query = $db->query('SHOW TABLES');
    $tables = $query->fetchAll();
    if(count($tables) == 0) {
        $sql = file_get_contents('g27_db_webespectaculos.sql');
        $db->query($sql);
    }

?>