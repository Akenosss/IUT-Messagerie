<?php
    namespace config;

    use PDO;
    use PDOException;
    class login {
        private $server = "localhost";
        private $dbname = "id20488745_chatbox";
        private $name   = "id20488745_root";
        private $passwd = "er{CX*]z#!1fo<o}";
        public $connection;

        public function getConnection() {
            $this->connection = null;

            try {
                $this->connection = new PDO("mysql:host=".$this->server.";dbname=".$this->dbname,$this->name,$this->passwd);
                $this->connection->exec("set names utf8");
            } catch (PDOException $e) {
                echo "Connection Failed : ".$e->getMessage();
            }

            return $this->connection;
        }
    }