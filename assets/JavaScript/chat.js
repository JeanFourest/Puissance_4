function showChat() {
    let y = document.getElementById("boutonChat");

    if(window.getComputedStyle(y).display === "flex") {
        console.log("hidden chat");
        document.getElementById("boutonChat").style.display = "none";
    }
    else {
        console.log("visible chat");
        document.getElementById("boutonChat").style.display = "flex";
    }
}