<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login - DualCore Tech</title>

  <!-- Bootstrap + Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
  <link rel="stylesheet" href="../public/css/login.css">
</head>

<body>

  <form name="formLogin" method="post" data-parsley-validate>
    <div class="card p-3">
      <div class="card-header border-0 bg-transparent text-center">
        <img src="img/logo.png" alt="DualCore Tech">
      </div>

      <div class="card-body">
        <div class="mb-3">
          <label for="email" class="form-label"><i class="bi bi-envelope-fill me-1"></i> E-mail</label>
          <input type="email" name="email" id="email" class="form-control"
                 required placeholder="Digite seu e-mail"
                 data-parsley-required-message="Preencha este campo"
                 data-parsley-type-message="Digite um e-mail válido">
        </div>

        <div class="mb-3">
          <label for="senha" class="form-label"><i class="bi bi-lock-fill me-1"></i> Senha</label>
          <div class="input-group">
            <input type="password" name="senha" id="senha" class="form-control"
                   required placeholder="Digite sua senha"
                   data-parsley-required-message="Preencha este campo"
                   data-parsley-errors-container="#error">
            <button type="button" class="btn btn-olho" onclick="mostrarSenha()">
              <i class="bi bi-eye-fill"></i>
            </button>
          </div>
          <div id="error"></div>
        </div>

        <button type="submit" class="btn btn-login w-100 mt-3">
          <i class="bi bi-box-arrow-in-right me-1"></i> Entrar
        </button>
      </div>
    </div>
  </form>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    function mostrarSenha() {
      const senha = document.getElementById('senha');
      const icon = event.currentTarget.querySelector('i');
      if (senha.type === 'password') {
        senha.type = 'text';
        icon.classList.replace('bi-eye-fill', 'bi-eye-slash-fill');
      } else {
        senha.type = 'password';
        icon.classList.replace('bi-eye-slash-fill', 'bi-eye-fill');
      }
    }
  </script>

</body>
</html>
