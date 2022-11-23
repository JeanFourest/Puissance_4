function revealThemes(){

    let x = document.getElementById("lesThemes");

    if(window.getComputedStyle(x).visibility === "visible") {
        console.log("hidden theme");
        document.getElementById("lesThemes").style.visibility = "hidden";
    } else {
        console.log("visible theme");
        document.getElementById("lesThemes").style.visibility = "visible";
    }
    
}


function revealDiff(){
    
    let y = document.getElementById("lesDifficultes");

    if(window.getComputedStyle(y).visibility === "visible") {
        console.log("hidden difficulty");
        document.getElementById("lesDifficultes").style.visibility = "hidden";
    } else {
        console.log("visible difficulty");
        document.getElementById("lesDifficultes").style.visibility = "visible";
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