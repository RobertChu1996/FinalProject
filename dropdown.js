/*When user clicks button, toggle hiding and showing*/

function dropFunction(){
  document.getElementById("myDropdown").classList.toggle("show");
}

//closes dropdown menu if clicked outside of it
window.onclick = function(event){
  if (!event.target.matches('.dropbtn')){
    var dropdowns = document.getElementByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++){
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')){
        openDropdown.classList.remove('show');
      }
    }
  }
}

function dropFunction2(){
  document.getElementById("myDropdown2").classList.toggle("show");
}

//closes dropdown menu if clicked outside of it
window.onclick = function(event){
  if (!event.target.matches('.dropbtn')){
    var dropdowns = document.getElementByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++){
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')){
        openDropdown.classList.remove('show');
      }
    }
  }
}

function dropFunction3(){
  document.getElementById("myDropdown3").classList.toggle("show");
}

//closes dropdown menu if clicked outside of it
window.onclick = function(event){
  if (!event.target.matches('.dropbtn')){
    var dropdowns = document.getElementByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++){
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')){
        openDropdown.classList.remove('show');
      }
    }
  }
}

function dropFunction4(){
  document.getElementById("myDropdown4").classList.toggle("show");
}

//closes dropdown menu if clicked outside of it
window.onclick = function(event){
  if (!event.target.matches('.dropbtn')){
    var dropdowns = document.getElementByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++){
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')){
        openDropdown.classList.remove('show');
      }
    }
  }
}
