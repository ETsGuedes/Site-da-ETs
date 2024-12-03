
// script.js

// Pegar o modal e o botão de login
const modal = document.getElementById("login-modal");
const loginBtn = document.getElementById("login-btn");
const closeBtn = document.getElementsByClassName("close")[0];

// Abrir o modal quando clicar no botão de login
loginBtn.onclick = function() {
    modal.style.display = "flex"; // Troca de "none" para "flex" para mostrar o modal
}

// Fechar o modal quando clicar no 'X'
closeBtn.onclick = function() {
    modal.style.display = "none"; // Fecha o modal
}

// Fechar o modal clicando fora da área do modal
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none"; // Fecha o modal ao clicar fora dele
    }
}
