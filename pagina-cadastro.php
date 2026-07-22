<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <title>Big Motors - Criar Conta</title>
</head>
<body class="bg-light py-5">
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-5">
                
                <div class="card shadow-sm p-4 border-0 bg-white">
                    <h2 class="h4 text-center mb-4 fw-bold">Criar Conta</h2>
                    
                    <form id="formCadastro" action="actions/cadastro_action.php" method="POST">
                        <div class="mb-3">
                            <label for="campoNome" class="form-label small fw-semibold text-muted">Nome Completo</label>
                            <input type="text" id="campoNome" name="nome" class="form-control" placeholder="Digite seu nome completo" required>
                        </div>

                        <div class="mb-3">
                            <label for="campoCpf" class="form-label small fw-semibold text-muted">CPF</label>
                            <input type="text" id="campoCpf" name="cpf" class="form-control" placeholder="000.000.000-00" maxlength="14" required>
                        </div>

                        <div class="mb-3">
                            <label for="campoEmail" class="form-label small fw-semibold text-muted">E-mail</label>
                            <input type="email" id="campoEmail" name="email" class="form-control" placeholder="seu@email.com" required>
                        </div>

                        <div class="mb-3">
                            <label for="campoSenha" class="form-label small fw-semibold text-muted">Senha</label>
                            <input type="password" id="campoSenha" name="senha" class="form-control" placeholder="Crie uma senha" required>
                        </div>

                        <div class="mb-4">
                            <label for="confirmarSenha" class="form-label small fw-semibold text-muted">Confirmar Senha</label>
                            <input type="password" id="confirmarSenha" name="confirmar_senha" class="form-control" placeholder="Repita a senha" required>
                            <div id="erroCadastro" class="text-danger mt-1 fs-7"></div>
                        </div>

                        <button type="submit" class="btn btn-primary w-100 py-2 mb-3">Criar conta</button>
                        
                        <div class="text-center mt-3">
                            <span class="text-muted small">Já possui conta? </span>
                            <a href="pagina-login.php" class="text-primary small fw-semibold text-decoration-underline">Fazer login</a>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
    <script src="assets/js/cadastro.js"></script>
</body>
</html>