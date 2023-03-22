<?php
    if(isset($_POST['login'])) {
        $pseudo = htmlspecialchars($_POST["pseudo"]);
        setcookie("active_session", $pseudo, time() + 3600);
        header("Location:afficher.php?pseudo=".$pseudo);
    }
?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Log in Chat</title>
</head>
<body>
    <h1>Welcome to the chat !</h1>
    <form method="post">
        <input type="text" name="pseudo" placeholder="Your pseudo" required/>
        <input type="submit" value="Validate" name="login"/>
    </form>
</body>
</html>