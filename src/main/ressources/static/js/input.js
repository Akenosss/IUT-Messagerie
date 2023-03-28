$(document).ready(function() {
    var refresh = setInterval(function() {
        $("#list-messages").load('listmessages.php');
        alert(login);
    }, 2000);
});

const urlPOST = "https://interactivechatbox.000webhostapp.com/php/exports/enregistrer.php";
function post() {
    let user = document.getElementById("user").value;
    let content = document.getElementById("content").value;

    $.post(
        urlPOST,
        {
            user: user,
            content: content
        }
    );

    document.getElementById("#list-messages").scrollTo(0,offsetHeight * 1.5);
    $("body").load('#');
}

addEventListener("keyup", function(event) {
    if(event.keyCode === 13 || event.key === "Enter") {
        post();
    }
});

function scroll() {
    var scr =document.getElementById("list-messages");
    scr.scrollTop = scr.scrollHeight-scr.offsetHeight;
}