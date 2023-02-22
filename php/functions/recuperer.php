<?php

use config\login;
use models\Database;

include_once '../config/login.php';
    include_once '../models/Database.php';

    $database = new login();
    $db = $database->getConnection();

    $phrases = new \models\Database($db);

    $stmt = $phrases->getFirstTen();

    $tab = [];
    $tab['messages'] = [];

    while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $cont = [
            "id"            => $row['id'],
            "date_message"  => $row['date_message'],
            "user"          => $row['user'],
            "content"       => $row['content']
        ];
        $tab['messages'][] = $cont;
    }

    echo json_encode($tab);