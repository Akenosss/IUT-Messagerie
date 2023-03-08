<?php
    $result = file_get_contents('http://localhost/git/chat/IUT-Messagerie/php/functions/recuperer.php', true);
    $tab = json_decode($result, true);

    foreach ($tab['data'] as $t):
?>

    <p><span><strong><?= $t['user']?></strong></span>
    <span class="message"><?= $t['content']?></span></p>

<?php endforeach; ?>