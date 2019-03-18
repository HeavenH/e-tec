<?php

    define('host', 'localhost');
    define('user', 'root');
    define('senha', 'heaven1337');
    define('db', 'users');

    $connect = mysqli_connect(host, user, senha, db) or die ('erro ao conectar ao banco de dados');

    

?>