

window.onload = function() {
    t.style.top = "50%";
    t.style.opacity = 1;
    // Get the value from localStorage
    var value = localStorage.getItem('myValue');
    
    // Display the value on the page
    var output = document.getElementById('value-output');
    output.innerText = value;
};
    let p = document.getElementById("pb");
    let r = document.getElementsByClassName("r-circle")[0];
    let b = document.getElementsByClassName("b-circle")[0];
    let i = document.getElementsByClassName("icon")[0];
    let t = document.getElementsByClassName("txt")[0];
    let lvl = document.getElementsByClassName("level-rg")[0]; 


    p.onclick = function () { 
        r.style.opacity = 0;
        b.style.opacity = 0;
        i.style.opacity = 0;
        t.style.opacity = 0;
        t.style.top = "90%";
        lvl.style.opacity = 1;
        lvl.style.visibility = "visible";
        lvl.style.top = "-450px";
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
