<?php
    $result = file_get_contents('http://localhost/git/chat/IUT-Messagerie/php/functions/recuperer.php', true);
    $tab = json_decode($result, true);

    foreach ($tab['data'] as $t):
?>
    <div class="main-content">
        <div class="content">
            <span><strong><?= $t['user']?></strong></span>
            <span class="message"><?= $t['content']?></span>
        </div>
        <span><?= $t['date_message'] ?></span>
    </div>

<?php endforeach; ?>