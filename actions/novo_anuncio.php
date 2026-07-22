<?php
require_once __DIR__ . '/../includes/auth_check.php';
require_once __DIR__ . '/../config/db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $idAnunciante  = $_SESSION['usuario_id'];
    $marca         = trim($_POST['marca'] ?? '');
    $modelo        = trim($_POST['modelo'] ?? '');
    $ano           = (int)($_POST['ano'] ?? 0);
    $cor           = trim($_POST['cor'] ?? '');
    $quilometragem = (int)($_POST['km'] ?? 0);
    $estado        = trim($_POST['uf'] ?? '');
    $cidade        = trim($_POST['cidade'] ?? '');
    $valor         = (float)str_replace(['.', ','], ['', '.'], $_POST['valor'] ?? '0');
    $descricao     = trim($_POST['descricao'] ?? '');

    if ($marca && $modelo && $ano && $valor) {
        try {
            $pdo->beginTransaction();

            // 1. Inserir o Anúncio
            $sqlAnuncio = "INSERT INTO Anuncio (Marca, Modelo, Ano, Cor, Quilometragem, Descricao, Valor, Estado, Cidade, IdAnunciante) 
                           VALUES (:marca, :modelo, :ano, :cor, :km, :descricao, :valor, :estado, :cidade, :idAnunciante)";
            
            $stmt = $pdo->prepare($sqlAnuncio);
            $stmt->execute([
                ':marca'        => $marca,
                ':modelo'       => $modelo,
                ':ano'          => $ano,
                ':cor'          => $cor,
                ':km'           => $quilometragem,
                ':descricao'    => $descricao,
                ':valor'        => $valor,
                ':estado'       => $estado,
                ':cidade'       => $cidade,
                ':idAnunciante' => $idAnunciante
            ]);

            $idAnuncio = $pdo->lastInsertId();

            // 2. Processar e salvar as Fotos na pasta assets/img/
            $diretorioDestino = __DIR__ . '/../assets/img/';
            if (!is_dir($diretorioDestino)) {
                mkdir($diretorioDestino, 0755, true);
            }

            $fotos = ['foto1', 'foto2', 'foto3'];
            foreach ($fotos as $campoFoto) {
                if (isset($_FILES[$campoFoto]) && $_FILES[$campoFoto]['error'] === UPLOAD_ERR_OK) {
                    $extensao = strtolower(pathinfo($_FILES[$campoFoto]['name'], PATHINFO_EXTENSION));
                    $nomeUnicoFoto = 'carro_' . $idAnuncio . '_' . uniqid() . '.' . $extensao;

                    if (move_uploaded_file($_FILES[$campoFoto]['tmp_name'], $diretorioDestino . $nomeUnicoFoto)) {
                        // Grava registro na tabela Foto conforme o diagrama
                        $stmtFoto = $pdo->prepare("INSERT INTO Foto (IdAnuncio, NomeArqFoto) VALUES (:idAnuncio, :nome)");
                        $stmtFoto->execute([
                            ':idAnuncio' => $idAnuncio,
                            ':nome'      => $nomeUnicoFoto
                        ]);
                    }
                }
            }

            $pdo->commit();
            header("Location: ../listagem-anuncios.php?sucesso=anuncio_criado");
            exit();

        } catch (Exception $e) {
            $pdo->rollBack();
            header("Location: ../novo-anuncio.php?erro=falha_ao_salvar");
            exit();
        }
    }
}
header("Location: ../novo-anuncio.php?erro=campos_incompletos");
exit();
?>