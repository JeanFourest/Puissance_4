function showChat(){

let y = document.getElementById("chatBody");

    if(window.getComputedStyle(y).display === "flex") {
        document.getElementById("chatBody").style.display = "none";
    } else {
        document.getElementById("chatBody").style.display = "flex";
    }
}