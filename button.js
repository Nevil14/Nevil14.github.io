//variable which target Menu button
const menubtn = document.querySelector(".menu-btn");
// Variable to see if menu is open or close or
//to see if user has click on button or not
let menuOpen = false;
menubtn.addEventListener("click", () => {
  if (!menuOpen) {
    // if menu is not open it will enter here
    //We r Adding a class name open in menu-btn
    menubtn.classList.add("open");
    menuOpen = true;
    window.open("SideMenu.html");
    window.close("index.html");
  } else {
    // we r removing class name open in menu-btn
    menubtn.classList.remove("open");
    menuOpen = false;
  }
});
