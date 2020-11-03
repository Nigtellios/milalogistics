function menuToggle() {
  const menuElement = document.getElementById('menuToggler');
  menuElement.classList.toggle("menu__active");
  document.body.classList.toggle('menu__lock-scroll');
  const bottomElement = document.getElementById('mobileToggler');
  bottomElement.classList.toggle("bottom-bar--unactive");
}

function mobileToggle() {
  const menuElement = document.getElementById('menuToggler');
  menuElement.classList.toggle("menu__active");
  const bottomElement = document.getElementById('mobileToggler');
  bottomElement.classList.toggle("bottom-bar--unactive");
  document.body.classList.toggle('menu__lock-scroll');
}

