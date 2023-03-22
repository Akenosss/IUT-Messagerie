<?php
namespace models;

class Database {
    private $connection;
    private $table = "chat";

    public $id;
    public $date_message;
    public $user;
    public $content;

    public function __construct($db) {
        $this->connection = $db;
    }

    public function get()
    {
        $sql = "SELECT * from " . $this->table. " order by id DESC";
        $query = $this->connection->prepare($sql);
        $query->execute();

        return $query;
    }

    public function post()
    {
        $sql = "INSERT INTO " .$this->table. " SET date_message = NOW(), user = :user, content = :content";

        //  Préparation requête
        $query = $this->connection->prepare($sql);

        // Protection contre les injections
        $this->user     = htmlspecialchars((strip_tags($this->user)));
        $this->content  = htmlspecialchars((strip_tags($this->content)));

        // Ajout des données protégées
        $query->bindParam(":user", $this->user);
        $query->bindParam(":content", $this->content);

        // Exec req
        if ($query->execute()) {
            return true;
        }
        return false;
    }
}