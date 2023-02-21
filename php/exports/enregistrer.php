<?php
    /* $user = htmlspecialchars($_GET['user']);
    $content = htmlspecialchars($_GET['content']); */

    $user = "oui";
    $content = "oui";

    include_once '../config/login.php';
    include_once '../models/Database.php';

    $database = new login();
    $db = $database->getConnection();

    $phrases = new \models\Database($db);

    if(!empty($user) && !empty($content)) {
        $phrases->user  = $user;
        $phrases->content  = $content;

        if($phrases->post()) {
            http_response_code(201);
            echo json_encode(["message" => "Done"]);
        } else {
            http_response_code(503);
            echo json_encode(["message" => "Not done"]);
        }
    }