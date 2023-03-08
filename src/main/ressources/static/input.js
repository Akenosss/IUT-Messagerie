$(document).ready(function() {
   var refresh = setInterval(function() {
      $("#list-messages").load('listmessages.php');
   }, 2000);
});

const url = "http://localhost/git/chat/IUT-Messagerie/php/exports/enregistrer.php";
function post() {
    let user = document.getElementById("user").value;
    let content = document.getElementById("content").value;

    $.post(
      url,
        {
            user: user,
            content: content
        },
    );
    $("body").load('#');
}