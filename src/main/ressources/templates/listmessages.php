<?php
    $result = file_get_contents('http://localhost/git/chat/IUT-Messagerie/php/functions/recuperer.php', true);
    $tab = json_decode($result, true);

    $newTab = [];
    $tabLength = count($tab['data'])-1;
    for($i=$tabLength; $i>-1 ; $i--) {
        $newTab[$i] = $tab['data'][$i];
    }

    foreach ($newTab as $t):
?>
    <div class="message-content">
        <div class="uclock">
            <span><strong><?= $t['user']?></strong></span>
            <span><?= $t['date_message'] ?></span>
        </div>
        <span class="message"><?= $t['content']?></span>
    </div>

<?php endforeach; ?>