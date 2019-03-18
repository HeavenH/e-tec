<?php

    class Database {
        // parametros da database

        private $host = 'localhost';
        private $username = 'root';
        private $password = 'heaven1337';
        private $db_name = 'users';
        private $connect;

        // conectando ao banco de dados

        public function connectDatabase() {
            $this->connect = null;
        // Tenta Conectar ao banco de dados
            try {
                $this->connect = new PDO('mysql:host=' . $this->host . ';dbname=' . $this->db_name, 
                $this->username, $this->password);
                $this->connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // Se não conseguir vai cair na excerção
            } catch(PDOException $error) {
                echo 'Connection Error: ' . $error->getMessage();
            }
        // Retorna a conexão
            return $this->connect;
        }

    }



?>
