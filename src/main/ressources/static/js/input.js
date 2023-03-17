/*$(document).ready(function() {
   var refresh = setInterval(function() {
      $("#list-messages").load('listmessages.php');
   }, 2000);
});*/

const urlPOST = "http://localhost/git/chat/IUT-Messagerie/php/exports/enregistrer.php";
function post() {
    let user = document.getElementById("user").value;
    let content = document.getElementById("content").value;

    $.post(
        urlPOST,
        {
            user: user,
            content: content
        },
    );

    $("body").load('#');
}

addEventListener("keyup", function(event) {
    if(event.keyCode === 13 || event.key === "Enter") {
        post();
    }
});