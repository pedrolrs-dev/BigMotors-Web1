<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
require_once __DIR__ . '/../config/db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome     = trim($_POST['nome'] ?? '');
    $cpf      = trim($_POST['cpf'] ?? '');
    $email    = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $senha    = $_POST['senha'] ?? '';
    $telefone = trim($_POST['telefone'] ?? '');

    if ($nome && $cpf && $email && $senha) {
        $senhaHash = password_hash($senha, PASSWORD_DEFAULT);

        try {
            $stmt = $pdo->prepare("INSERT INTO Anunciante (Nome, CPF, Email, SenhaHash, Telefone) VALUES (:nome, :cpf, :email, :senhaHash, :telefone)");
            $stmt->execute([
                ':nome'      => $nome,
                ':cpf'       => $cpf,
                ':email'     => $email,
                ':senhaHash' => $senhaHash,
                ':telefone'  => $telefone
            ]);

            // Redireciona para a tela de login com mensagem de sucesso
            header("Location: ../pagina-login.php?sucesso=cadastrado");
            exit();

        } catch (PDOException $e) {
            // Trata erros de duplicidade de CPF/Email
            header("Location: ../pagina-cadastro.php?erro=email_ou_cpf_existente");
            exit();
        }
    }
}
header("Location: ../pagina-cadastro.php?erro=campos_invalidos");
exit();
?>