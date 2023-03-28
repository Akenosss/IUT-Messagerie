<?php
    $result = file_get_contents('https://interactivechatbox.000webhostapp.com/php/functions/recuperer.php', true);
    $tab = json_decode($result, true);

    $newTab = [];
    for($i=9; $i>-1 ; $i--) {
        $newTab[$i] = $tab['data'][$i];
    }

    foreach($newTab as $t):
        $date = new dateTime($t['date_message']);
        ?>
        <div class="message-content">
            <div class="uclock">
                <span><strong><?= $t['user']?></strong></span>
                <span><?= date_format($date, 'H:i:d') ?></span>
            </div>
            <span class="message"><?= $t['content']?></span>
        </div>

    <?php endforeach; ?>