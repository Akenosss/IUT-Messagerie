<?php

use config\login;
use models\Database;

    include_once ('../config/login.php');
    include_once ('../models/Database.php');

    $database = new login();
    $db = $database->getConnection();

    $phrases = new Database($db);

    $stmt = $phrases->get();

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

    deliver_response(200,"Done", $tab['messages']);


    function deliver_response($status, $status_message, $data) {
        header("HTTP/1.1 $status $status_message");
        $response['status'] = $status;
        $response['status_message'] = $status_message;
        $response['data'] = $data;

        $json_response = json_encode($response);
        echo $json_response;
    }