<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="../static/input.js"></script>
    <link rel="stylesheet" href="../static/css.css"/>
    <title>ChatBox</title>
</head>
    <body>
        <div class="message-form">
            <div class="text-input">
                <input type="text" id="user" placeholder="Your name"/>
                <input type="text" id="content" placeholder="Type something..."/>
            </div>
            <input type="submit" value="Enter" onclick="post();"/>
        </div>
        <div id="list-messages">
            <?php include("./listmessages.php"); ?>
        </div>
    </body>
</html>