<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <title>Big Motors - Login</title>
</head>
<body class="bg-light py-5">
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-5"> 
                
                <div class="card shadow-sm p-4 border-0 bg-white">
                    <h2 class="h4 text-center mb-4 fw-bold">Fazer Login</h2>
                    
                    <form id="meuForm" action="actions/login_action.php" method="POST">
                        <div class="mb-3">
                            <label for="campoEmail" class="form-label small fw-semibold text-muted">E-mail</label>
                            <input type="email" id="campoEmail" name="email" class="form-control" placeholder="seu@email.com" required>
                        </div>

                        <div class="mb-3">
                            <label for="campoSenha" class="form-label small fw-semibold text-muted">Senha</label>
                            <input type="password" id="campoSenha" name="senha" class="form-control" placeholder="Sua senha" required>
                            <div id="erroSenha" class="text-danger mt-1 fs-7"></div>
                        </div>

                        <button type="submit" class="btn btn-primary w-100 py-2 mb-3">Entrar</button>
                        
                        <div class="text-center mt-3">
                            <span class="text-muted small">Não tem conta? </span>
                            <a href="pagina-cadastro.php" class="text-primary small fw-semibold text-decoration-underline">Cadastre-se</a>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
    <script src="assets/js/script.js"></script>
</body>
</html>