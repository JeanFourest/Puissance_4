function showChat(){

let y = document.getElementById("chatBody");

    if(window.getComputedStyle(y).display === "flex") {
        console.log("Tu viens de fermer la fenêtre de chat");
        document.getElementById("chatBody").style.display = "none";
    } else {
        console.log("Tu viens d'ouvrir la fenêtre de chat");
        document.getElementById("chatBody").style.display = "flex";
    }
}