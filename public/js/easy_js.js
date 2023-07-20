
let qdb = document.getElementsByClassName("qdb")[0];        
let next = document.getElementsByClassName("next2")[0];      
let r = document.getElementsByClassName("r");
let rd = document.getElementsByClassName("rd");
let cc = document.getElementsByClassName("cc")[0];
let cr = document.getElementsByClassName("cr")[0];
let sc = document.getElementsByClassName("sc")[0];
let sv = document.getElementsByClassName("score_value")[0];
let wh = document.getElementsByClassName("wh")[0];
let rc = document.getElementsByClassName("rcircle")[0];
let score = document.getElementsByClassName("score")[0];
let result = document.getElementsByClassName("result")[0];





let count = cc.innerHTML;
console.log("page : " + count);

if (count == 4){
    result.style.fontSize = "130px";
    setTimeout(function() {
    rc.style.opacity = 1;
}, 500);

    qdb.innerHTML = "Your result is : " ;
    sv.style.visibility = "hidden";
    score.style.visibility = "hidden";

    for (let i =0 ; i < 3 ; i++){
        r[i].style.visibility = "hidden";
    }

    t = localStorage.getItem("total");
    result.style.opacity = 1;
    if (t <= 1 ) {
        result.innerHTML = "Weak";
    }if (t > 1 && t < 3){   
        result.innerHTML = "Good";
    }if ( t >= 3){
        result.innerHTML = "Perfect";
    }
}


next.onclick = function() {
    count++;
    t = localStorage.getItem("total");
    score = localStorage.getItem("score");

    t = Number(score) + Number(t);
    console.log("total : " + t);
    localStorage.setItem("total", t);
}


function radio_action() {
    if(count == 1){
    var score = 0 ;  
    var t = 0;
    localStorage.setItem("total", t);
}

    t = localStorage.getItem("total");
    sv.innerHTML = t ;
    rc.innerHTML = t ;

    score = 0 ;
    localStorage.setItem("score", score);
    for (let i =0 ; i < 3 ; i++){
    r[i].onclick = function() {
    
    console.log(rd[i].innerHTML); 
    if (rd[i].innerHTML == cr.innerHTML){
    score = 1;
    }
    else{
    score = 0;
    }

    localStorage.setItem("score", score);

    sc.innerHTML = score;
    console.log(score); 
}
}
}

radio_action()


// -------------------------------------------- animations

for (let i =0 ; i < 3 ; i++){
rd[i].onclick = function(){
    r[i].checked = true;
    r[i].onclick();
}
}

setTimeout(function() {
    qdb.style.opacity = 1;
}, 400);

setTimeout(function() {
    sv.style.color = "white";
}, 50);


