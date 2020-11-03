function menuToggle() {
  const menuElement = document.getElementById('menuToggler');
  menuElement.classList.toggle("menu__active");
  document.body.classList.toggle('menu__lock-scroll');
}

