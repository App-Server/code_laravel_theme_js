// blog/create.blade.php
document.getElementById('blogForm').addEventListener('submit', 
function(event) {
var titleInput = document.getElementById('exampleInputText1');
var commentInput = document.getElementById('floatingTextarea2');
var isValid = true;

// Validação do campo de título
if (titleInput.value.trim() === '') {
    titleInput.classList.add('is-invalid');
    isValid = false;
} else {
    titleInput.classList.remove('is-invalid');
}

// Validação do campo de comentário
if (commentInput.value.trim() === '') {
    commentInput.classList.add('is-invalid');
    isValid = false;
} else {
    commentInput.classList.remove('is-invalid');
}

// Impedir o envio do formulário se houver campos vazios
if (!isValid) {
    event.preventDefault();
}
});