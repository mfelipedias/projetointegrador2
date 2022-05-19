function validaSenha(input) {
    if (input.value != document.getElementById('t_senha').value) {
        input.setCustomValidity('Repita a senha corretamente.');
    } else {
        input.setCustomValidity('');
    }
}