<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Big Motors - Registrar Interesse</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body class="bg-light py-5">

    <header class="card shadow-sm p-3 mb-4 bg-white container">
        <div class="row align-items-center">
            <div class="col-12 col-md-6 text-center text-md-start mb-2 mb-md-0">
                <h1 class="h3 m-0 text-primary fw-bold">Big Motors</h1>
            </div>
            <div class="col-12 col-md-6 text-center text-md-end">
                <nav>
                    <a href="index.php" class="btn btn-link text-decoration-none text-secondary fw-semibold px-2">Home</a>
                    <a href="pagina-login.php" class="btn btn-link text-decoration-none text-secondary fw-semibold px-2">Vender</a>
                    <a href="pagina-login.php" class="btn btn-primary btn-sm ms-2 px-3">Entrar</a>
                </nav>
            </div>
        </div>
    </header>

    <main class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-6">

                <a href="index.php" class="text-decoration-none text-secondary small d-inline-block mb-3">&larr; Voltar para o anúncio</a>

                <div class="card shadow-sm p-4 border-0 bg-white">
                    <h2 class="h4 fw-bold text-dark mb-1">Registrar Interesse</h2>
                    <p class="text-muted mb-4" id="valorMarcaModelo">Honda Civic EXL &middot; R$ 89.000,00</p>

                    <form id="formInteresse" action="actions/interesse_action.php" method="POST">
                        <input type="hidden" name="anuncio_id" value="<?php echo $_GET['id'] ?? 1; ?>">

                        <div class="mb-3">
                            <label for="campoNome" class="form-label small fw-semibold text-muted">Nome</label>
                            <input type="text" id="campoNome" name="nome" class="form-control" placeholder="Digite seu nome completo" required>
                        </div>

                        <div class="mb-3">
                            <label for="campoTelefone" class="form-label small fw-semibold text-muted">Telefone</label>
                            <input type="tel" id="campoTelefone" name="telefone" class="form-control" placeholder="(34) 99999-9999" required>
                        </div>

                        <div class="mb-3">
                            <label for="campoMensagem" class="form-label small fw-semibold text-muted">Mensagem</label>
                            <textarea id="campoMensagem" name="mensagem" class="form-control" rows="4" placeholder="Escreva sua mensagem de interesse..." required></textarea>
                        </div>

                        <div id="msgInteresse" class="text-success mt-1 mb-3 fs-7"></div>

                        <button type="submit" class="btn btn-primary w-100 py-2">Enviar Interesse</button>
                    </form>
                </div>

            </div>
        </div>
    </main>

    <footer class="text-center pb-4 text-muted small mt-5">
        <p>&copy; 2026 - Big Motors. Todos os direitos reservados.</p>
    </footer>

    <script src="assets/js/interesse.js"></script>
</body>
</html>