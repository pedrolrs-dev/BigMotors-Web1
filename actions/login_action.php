<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
require_once __DIR__ . '/../config/db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $senha = $_POST['senha'] ?? '';

    if ($email && $senha) {
        $stmt = $pdo->prepare("SELECT Id, Nome, SenhaHash FROM Anunciante WHERE Email = :email");
        $stmt->execute([':email' => $email]);
        $anunciante = $stmt->fetch();

        if ($anunciante && password_verify($senha, $anunciante['SenhaHash'])) {
            session_regenerate_id(true);

            $_SESSION['usuario_id']   = $anunciante['Id'];
            $_SESSION['usuario_nome'] = $anunciante['Nome'];

            header("Location: ../principal-interna.php");
            exit();
        }
    }
}
header("Location: ../pagina-login.php?erro=dados_invalidos");
exit();
?>