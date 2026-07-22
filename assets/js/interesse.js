document.getElementById('formInteresse').addEventListener('submit', function (evento) {
    evento.preventDefault();

    const mensagem = document.getElementById('msgInteresse');
    mensagem.textContent = 'Interesse registrado com sucesso!';

    this.reset();
});
