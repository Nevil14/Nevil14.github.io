//variable which target Menu button
const menubtn = document.querySelector(".menu-btn");
// Variable to see if menu is open or close or
//to see if user has click on button or not
let menuOpen = true;
menubtn.classList.add("open");
menubtn.addEventListener("click", () => {
  if (menuOpen) {
    // we r removing class name open in menu-btn
    menubtn.classList.remove("open");
    menuOpen = true;
    window.open("index.html");
    window.close("SideMenu");
  }
});
