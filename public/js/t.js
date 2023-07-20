
// -------------------------------------------------------------- mobile menu

let menu = document.getElementsByClassName("button2")[0]; // =
let menux = document.getElementsByClassName("button3")[0]; // x
let menulinks = document.getElementsByClassName("navbar__toggle")[0];

function shw_m(elm1, elm2, elm3) {
  elm1.style.opacity = 0;
  elm2.style.opacity = 1;
  elm3.style.opacity = 1;
  elm1.style.transition = "all 0.4s ease";
  elm3.style.transition = "all 0.6s ease";
}

function cls_m(elm1, elm2, elm3) {
  elm1.style.opacity = 1;
  elm2.style.opacity = 0;
  elm3.style.opacity = 0;
  elm2.style.transition = "all 0.4s ease";
  elm3.style.transition = "all 0.3s ease";
}

/* menu.onclick = function () {
  shw_m(menu, menux, menulinks);
};

menux.onclick = function () {
  cls_m(menu, menux, menulinks);
}; */

// -------------------------------------------------------------- login


let popuplgn = document.getElementById("popuplgn");
let rg = document.getElementById("rg");
let rgn = document.getElementById("rgn"); //  rg=regester form rgn=regester form for new usr
let crtlnk = document.getElementById("crtlnk");
let lglnk = document.getElementById("lglnk");
let cls1 = document.getElementById("cls1");
let dark = document.getElementsByClassName("darker")[0];
let start = document.getElementsByClassName("start")[0];
console.log(popuplgn);
function shw(elm) {
  elm.setAttribute("style", "visibility: visible;");
}

function cls(elm) {
  elm.setAttribute("style", "visibility:hidden;");
}


// ------- -------- ------- ---------- ------ ---

popuplgn.addEventListener("click", function () {
  shw(rg);
  dark.style.opacity = 0.6;
  dark.style.visibility = "visible";
});

start.addEventListener("click", function () {
  shw(rg);
  dark.style.opacity = 0.6;
  dark.style.visibility = "visible";
});

cls1.addEventListener("click", function () {
  cls(rg);
  cls(rgn);
  dark.style.opacity = 0;
  dark.style.visibility = "hidden";
});

cls2.addEventListener("click", function () {
  cls(rgn);
  cls(rg);
  dark.style.opacity = 0;
  dark.style.visibility = "hidden";
});

lglnk.addEventListener("click", function () {
  shw(rg);
  cls(rgn);
});

crtlnk.addEventListener("click", function () {
  shw(rgn);
  cls(rg);
});

// -------------------------------------------------------------- About

let c1 = document.getElementsByClassName("circl1")[0];
let c2 = document.getElementsByClassName("circl2")[0];
let txt = document.getElementsByClassName("txt")[0];
let about = document.getElementsByClassName("About")[0];
let us = document.getElementsByClassName("us")[0];
let Layer1 = document.getElementsByClassName("layer1")[0];
let Layer2 = document.getElementsByClassName("layer2")[0];

c1.onclick = function () {
  c1.style.background = "#0E2C4B";
  c2.style.background = "#d0d0d0";
  Layer2.style.opacity = 0;
  Layer1.style.opacity = 1;
  txt.innerHTML =
    " goal is to create English language  proficiency <br>tests that are not only accurate,but also accessible, <br>easy to use, and available at all times.";
};

c2.onclick = function () {
  c1.style.background = "#d0d0d0";
  c2.style.background = "#0E2C4B";
  Layer2.style.opacity = 1;
  Layer1.style.opacity = 0;
};

// -------------------------------------------------------------- Scroll into
function myFunction() {
  const element = document.getElementById("content");
  element.scrollIntoView({ behavior: "smooth", block: "center" });
}


// --------------------------------------------------------- welcome

function submitValue() {
  // Get the value entered by the user
  var input = document.getElementById('value-input');
  var value = input.value;
  // Store the value in localStorage
  localStorage.setItem('myValue', value);

  // Redirect to the second page
  window.location.href = 'welcom.html';
}


window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}

function myFunctionmnu() {
  document.getElementById("myDropdown").classList.toggle("show");
}
