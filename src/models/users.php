<?php

class Users {


    private $connect;
    private $table = 'user';

    public $id;
    public $username;

    // constructor

    public function __construct($db) {
        $this->connect = $db;
    }

    public function readUsers() {
        $query = 'SELECT
        c.username as username,
        c.iduser 
        FROM
            ' . $this->table . ' p
        LEFT JOIN
            user c ON p.iduser = c.iduser
        ORDER BY
            p.created_ad DESC';

    // Preparando o tratamento

    $stmt = $this->connect->prepare($query);

    // Execute a query
    $stmt->execute();
    
    return $stmt;
    }
}

?>
