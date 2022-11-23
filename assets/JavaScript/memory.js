function revealThemes(){

    let x = document.getElementById("lesThemes");

    if(window.getComputedStyle(x).display === "flex") {
        console.log("hidden theme");
        document.getElementById("lesThemes").style.display = "none";
    } else {
        console.log("visible theme");
        document.getElementById("lesThemes").style.display = "flex";
    }
    
}


function revealDiff(){
    
    let y = document.getElementById("lesDifficultes");

    if(window.getComputedStyle(y).display === "flex") {
        console.log("hidden difficulty");
        document.getElementById("lesDifficultes").style.display = "none";
    } else {
        console.log("visible difficulty");
        document.getElementById("lesDifficultes").style.display = "flex";
    }
}


function diff1(){

    document.getElementById("tableau1").style.display = "flex";
    document.getElementById("tableau2").style.display = "none";
    document.getElementById("tableau3").style.display = "none";
    document.getElementById("tableau4").style.display = "none";
}

function diff2(){

    document.getElementById("tableau1").style.display = "none";
    document.getElementById("tableau2").style.display = "flex";
    document.getElementById("tableau3").style.display = "none";
    document.getElementById("tableau4").style.display = "none";
}

function diff3(){

    document.getElementById("tableau1").style.display = "none";
    document.getElementById("tableau2").style.display = "none";
    document.getElementById("tableau3").style.display = "flex";
    document.getElementById("tableau4").style.display = "none";
}

function diff4(){

    document.getElementById("tableau1").style.display = "none";
    document.getElementById("tableau2").style.display = "none";
    document.getElementById("tableau3").style.display = "none";
    document.getElementById("tableau4").style.display = "flex";
}

function start(){
    document.getElementById("themeButtonBox").style.display = "none";
    document.getElementById("diffButtonBox").style.display = "none";
    document.getElementById("startButtonBox").style.display = "none";
    document.getElementById("lesThemes").style.display = "none";
    document.getElementById("lesDifficultes").style.display = "none";

    
}