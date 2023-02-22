<?php
    namespace config;

    use PDO;
    use PDOException;
    class login {
        private $server = "127.0.0.1";
        private $dbname = "messagerie";
        private $name   = "root";
        private $passwd = "";
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