setInterval(reload(), 2000);
function reload() {
    $("#list-messages").load(location.href + "#list-messages");
}

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
}