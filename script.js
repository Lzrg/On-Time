const MENUICON = document.querySelector("#menu");
const NAVLINKS = document.querySelector(".main-nav");


function showMenu (){
  NAVLINKS.classList.toggle("show-nav");
  NAVLINKS.addEventListener('click', showMenu, false);
}

//
MENUICON.addEventListener('click', showMenu, false);
