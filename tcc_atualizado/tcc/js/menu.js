const chk = document.getElementById('chk')

chk.addEventListener('change', () => {
  document.body.classList.toggle('dark')
})
// Seleciona o checkbox do modo escuro/claro
const darkModeToggle = document.getElementById("dark-mode-toggle");

// Evento para alternar entre os temas
darkModeToggle.addEventListener("change", () => {
  document.body.classList.toggle("light-theme", darkModeToggle.checked);
});
let menu = document.querySelector('#menu-btn');
let navbar = document.querySelector('.navbar');

menu.onclick = () =>{
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
}

window.onscroll = () =>{
    menu.classList.remove('fa-times');
    navbar.classList.remove('active');
}
