<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
require_once __DIR__ . '/../config/db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $idAnuncio = (int)($_POST['anuncio_id'] ?? 0);
    $nome      = trim($_POST['nome'] ?? '');
    $telefone  = trim($_POST['telefone'] ?? '');
    $mensagem  = trim($_POST['mensagem'] ?? '');

    if ($idAnuncio > 0 && $nome && $telefone && $mensagem) {
        $stmt = $pdo->prepare("INSERT INTO Interesse (Nome, Telefone, Mensagem, IdAnuncio) VALUES (:nome, :telefone, :mensagem, :idAnuncio)");
        $stmt->execute([
            ':nome'      => $nome,
            ':telefone'  => $telefone,
            ':mensagem'  => $mensagem,
            ':idAnuncio' => $idAnuncio
        ]);

        header("Location: ../registro-interesse.php?id={$idAnuncio}&sucesso=1");
        exit();
    }
}
header("Location: ../index.php?erro=interesse_invalido");
exit();
?>