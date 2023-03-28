<?php
    $pseudo = htmlspecialchars($_GET['pseudo']);

    if(isset($_POST['logout'])) {
        header("Location: ../../../index.php");
    }
?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="../static/js/input.js"></script>
    <link rel="stylesheet" href="../static/css/afficher.css"/>
    <title>ChatBox</title>
</head>
<body>
<div class="main">
    <div class="logout">
        <form method="post">
            <span>Log in as : <?= $pseudo ?></span>
            <input type="submit" name="logout" value="Log out"/>
        </form>
    </div>
    <div id="list-messages">
        <?php include("./listmessages.php"); ?>
    </div>
    <div class="message-input">
        <input type="hidden" id="user" value="<?= $pseudo ?>"/>
        <input type="text" id="content" placeholder="Type something..."/>
        <input type="submit" value="Enter" onclick="post();"/>
    </div>
</div>
</body>
</html>