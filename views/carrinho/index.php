

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

  <style>
    body {
      background-color: #121212;
      color: #fff;
      font-family: "Poppins", sans-serif;
    }

    header {
      background-color: #1a1a1a;
      box-shadow: 0 2px 10px rgba(255, 60, 0, 0.2);
    }

    .navbar-brand {
      color: #ff3c00 !important;
      font-weight: 700;
    }

    .cart-container {
      margin-top: 60px;
    }

    .card {
      background-color: #1c1c1c;
      border: 1px solid #ff3c00;
    }

    .table > :not(caption) > * > * {
      background-color: transparent;
      color: #fff;
      vertical-align: middle;
    }

    .btn-danger {
      background-color: #ff3c00;
      border: none;
    }

    .btn-danger:hover {
      background-color: #d53100;
    }

    .btn-outline-danger {
      color: #ff3c00;
      border-color: #ff3c00;
    }

    .btn-outline-danger:hover {
      background-color: #ff3c00;
      color: #fff;
    }

    footer {
      background-color: #1a1a1a;
      color: #ccc;
      text-align: center;
      padding: 20px;
      margin-top: 50px;
    }

    img.produto {
      width: 80px;
      height: 80px;
      object-fit: cover;
      border-radius: 8px;
    }
  </style>
</head>
<body>

<!-- HEADER -->
<header class="py-3">
  <nav class="navbar navbar-expand-lg navbar-dark container">
    <a class="navbar-brand" href="index.php">
      <i class="bi bi-cpu-fill"></i> DualCore Tech
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="menu">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
        <li class="nav-item"><a href="produtos.php" class="nav-link">Produtos</a></li>
        <li class="nav-item"><a href="carrinho.php" class="nav-link active text-danger"><i class="bi bi-cart"></i> Carrinho</a></li>
      </ul>
    </div>
  </nav>
</header>

<!-- CONTEÚDO -->
<div class="container cart-container">
  <h2 class="text-center text-danger mb-4"><i class="bi bi-cart4"></i> Meu Carrinho</h2>

  <?php if (empty($_SESSION['carrinho'])): ?>
    <div class="alert alert-warning text-center">Seu carrinho está vazio 😕</div>
  <?php else: ?>
    <div class="card p-3">
      <div class="table-responsive">
        <table class="table align-middle">
          <thead>
            <tr>
              <th>Produto</th>
              <th>Nome</th>
              <th>Preço</th>
              <th>Quantidade</th>
              <th>Subtotal</th>
              <th>Ação</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($_SESSION['carrinho'] as $produto): ?>
              <tr>
                <td><img src="<?= $produto['imagem'] ?>" class="produto" alt="<?= $produto['nome'] ?>"></td>
                <td><?= $produto['nome'] ?></td>
                <td>R$ <?= number_format($produto['preco'], 2, ',', '.') ?></td>
                <td>
                  <form method="post" class="d-flex align-items-center">
                    <input type="hidden" name="id" value="<?= $produto['id'] ?>">
                    <input type="number" name="quantidade" value="<?= $produto['quantidade'] ?>" min="1" class="form-control form-control-sm w-50 text-center me-2">
                    <button type="submit" name="atualizar" class="btn btn-outline-danger btn-sm"><i class="bi bi-arrow-repeat"></i></button>
                  </form>
                </td>
                <td>R$ <?= number_format($produto['preco'] * $produto['quantidade'], 2, ',', '.') ?></td>
                <td>
                  <form method="post">
                    <input type="hidden" name="id" value="<?= $produto['id'] ?>">
                    <button type="submit" name="remover" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></button>
                  </form>
                </td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>

      <div class="text-end mt-3">
        <h4>Total: <span class="text-danger">R$ <?= number_format($total, 2, ',', '.') ?></span></h4>
        <a href="pagamento.php" class="btn btn-danger mt-3"><i class="bi bi-credit-card"></i> Finalizar Compra</a>
      </div>
    </div>
  <?php endif; ?>
</div>