<?php require_once __DIR__ . '/includes/auth_check.php'; ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Big Motors - Interesses no Anúncio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body class="bg-light py-5">

    <header class="card shadow-sm p-3 mb-4 bg-white container">
        <div class="row align-items-center">
            <div class="col-12 col-md-6 text-center text-md-start mb-2 mb-md-0">
                <h1 class="h3 m-0 text-primary fw-bold">Big Motors <span class="fs-6 text-muted fw-normal">| Painel</span></h1>
            </div>
            <div class="col-12 col-md-6 text-center text-md-end">
                <nav>
                    <a href="listagem-anuncios.php" class="btn btn-link text-decoration-none text-secondary fw-semibold px-2">Meus Anúncios</a>
                    <a href="actions/logout_action.php" class="btn btn-outline-danger btn-sm ms-2 px-3">Sair</a>
                </nav>
            </div>
        </div>
    </header>

    <main class="container my-5">
        <a href="detalhe-anuncio.php?id=1" class="text-decoration-none text-secondary small d-inline-block mb-3">&larr; Voltar para o anúncio</a>

        <h2 class="h4 fw-bold text-dark mb-1">Interesses recebidos</h2>
        <p class="text-muted mb-4">Honda Civic EXL - 2021</p>

        <div class="d-flex flex-column gap-3" id="listaInteresses">

            <div class="card shadow-sm border-0 bg-white p-3">
                <div class="d-flex justify-content-between align-items-start gap-3">
                    <div>
                        <h3 class="h6 fw-bold text-dark mb-1">Marcos Paulo</h3>
                        <p class="text-muted small mb-2">(34) 99123-4567</p>
                        <p class="mb-0">Boa noite, o carro ainda está disponível? Consegue enviar mais fotos do motor?</p>
                    </div>
                    <button type="button" class="btn btn-outline-danger btn-sm flex-shrink-0">Excluir</button>
                </div>
            </div>

            <div class="card shadow-sm border-0 bg-white p-3">
                <div class="d-flex justify-content-between align-items-start gap-3">
                    <div>
                        <h3 class="h6 fw-bold text-dark mb-1">Bárbara Ribeiro</h3>
                        <p class="text-muted small mb-2">(34) 98877-1271</p>
                        <p class="mb-0">Tenho interesse, você aceita financiamento próprio ou só via banco?</p>
                    </div>
                    <button type="button" class="btn btn-outline-danger btn-sm flex-shrink-0">Excluir</button>
                </div>
            </div>

        </div>
    </main>

    <footer class="text-center pb-4 text-muted small mt-5">
        <p>&copy; 2026 - Big Motors. Todos os direitos reservados.</p>
    </footer>
</body>
</html>