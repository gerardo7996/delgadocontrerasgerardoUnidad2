//Mediante este código de JavaScript, realizamos el desplazamiento de los formularios
//del registro y del login
const registerBtn = document.getElementById('register');
const loginBtn = document.getElementById('login-btn');
const container = document.getElementById('container');

registerBtn.addEventListener("click", () => {
    container.classList.add("right-panel-active");
});

loginBtn.addEventListener("click", () => {
    container.classList.remove("right-panel-active")
});