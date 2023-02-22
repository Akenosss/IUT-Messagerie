<?php
    $user = htmlspecialchars($_GET['user']);
    $content = htmlspecialchars($_GET['content']);

    use config\login;
    use models\Database;
    include_once '../config/login.php';
    include_once '../models/Database.php';


    $database = new login();
    $db = $database->getConnection();

    $input = new Database($db);

    if(!empty($user) && !empty($content)) {
        $input->user  = $user;
        $input->content  = $content;

        if($input->post()) {
            http_response_code(201);
            echo json_encode(["message" => "Done"]);
        } else {
            http_response_code(503);
            echo json_encode(["message" => "Not done"]);
        }
    }