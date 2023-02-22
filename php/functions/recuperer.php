<?php

use config\login;
use models\Database;

include_once '../config/login.php';
    include_once '../models/Database.php';

    $database = new login();
    $db = $database->getConnection();

    $phrases = new \models\Database($db);

    $stmt = $phrases->getAll();

    $tab = [];
    $tab['messages'] = [];

    while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        extract($row);

        $cont = [
        "id"            => $id,
        "date_message"  => $date_message,
        "user"          => $user,
        "content"       => $content
        ];

        $tab['messages'][] = $cont;
        }

    echo json_encode($tab);