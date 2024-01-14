let root = document.querySelector(":root");
let button = document.querySelector("button.light-switch");

button.addEventListener('click', () => {
  event.preventDefault();
  root.classList.toggle('dark');
})