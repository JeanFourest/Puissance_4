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


    let mseconds = 0;
    let seconds = 0;
    let minutes = 0;
    let hours = 0;

    setInterval(setmseconds, 10)

    function setmseconds() {

        if(mseconds < 99) {
        mseconds = mseconds + 1;
        document.getElementById("mseconds").innerHTML = mseconds;
        }

        if(mseconds >= 99) {
            mseconds = 0;
            seconds = seconds + 1;
            document.getElementById("seconds").innerHTML = seconds;
        }

        if(seconds >= 59) {
            seconds = 0;
            minutes = minutes + 1;
            document.getElementById("minutes").innerHTML = minutes;
        }

        if(minutes >= 59) {
            minutes = 0;
            hours = hours + 1;
            document.getElementById("hours").innerHTML = hours;
        }
    }   


    let t1 = document.getElementById("tableau1");
    let t2 = document.getElementById("tableau2");
    let t3 = document.getElementById("tableau3");
    let t4 = document.getElementById("tableau4");



    if(window.getComputedStyle(t1).display === "flex") {
        console.log("difficulty easy started");

        let idCard = [];


        

        


        
    }
}