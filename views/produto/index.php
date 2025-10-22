<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Produtos | DualCore Tech</title>

  <!-- Bootstrap -->
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

    .hero {
      background: radial-gradient(circle, #1a1a1a, #0d0d0d);
      text-align: center;
      padding: 80px 20px;
    }

    .hero h1 {
      color: #ff3c00;
      font-weight: 700;
      font-size: 2.8rem;
    }

    .hero p {
      color: #ccc;
    }

    .produto-card {
      background-color: #1c1c1c;
      border: 1px solid #ff3c00;
      border-radius: 10px;
      transition: all 0.3s ease;
    }

    .produto-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 0 20px rgba(255, 60, 0, 0.3);
    }

    .produto-card img {
      height: 200px;
      object-fit: cover;
      border-bottom: 1px solid #ff3c00;
    }

    .produto-card h5 {
      color: #ff3c00;
      font-weight: 600;
    }

    .btn-danger {
      background-color: #ff3c00;
      border: none;
    }

    .btn-danger:hover {
      background-color: #d53100;
    }

    footer {
      background-color: #1a1a1a;
      color: #ccc;
      text-align: center;
      padding: 20px;
      margin-top: 50px;
    }
  </style>
</head>
<body>

<!-- HEADER -->


<!-- HERO -->
<section class="hero">
  <h1>Nossos Produtos</h1>
  <p>Escolha entre as melhores peças e consoles do mercado gamer!</p>
</section>

<!-- PRODUTOS -->
<main class="container py-5">
  <div class="row g-4">

    <!-- PRODUTO 1 -->
    <div class="col-md-6 col-lg-4">
      <div class="card produto-card h-100">
        <img src="image/placaVideo.png" class="card-img-top" alt="Placa de Vídeo RTX 4070">
        <div class="card-body d-flex flex-column">
          <h5 class="card-title">Placa de Vídeo RTX 4070 12GB</h5>
          <p class="card-text text-light">Desempenho de última geração para gamers exigentes.</p>
          <p class="fw-bold text-danger fs-5 mt-auto">R$ 3.999,00</p>
          <a href="#" class="btn btn-danger mt-2"><i class="bi bi-cart"></i> Comprar</a>
        </div>
      </div>
    </div>

    <!-- PRODUTO 2 -->
    <div class="col-md-6 col-lg-4">
      <div class="card produto-card h-100">
        <img src="image/ps5.png" class="card-img-top" alt="PlayStation 5">
        <div class="card-body d-flex flex-column">
          <h5 class="card-title">PlayStation 5 Slim 1TB</h5>
          <p class="card-text text-light">Nova geração de consoles com desempenho incrível.</p>
          <p class="fw-bold text-danger fs-5 mt-auto">R$ 4.499,00</p>
          <a href="#" class="btn btn-danger mt-2"><i class="bi bi-cart"></i> Comprar</a>
        </div>
      </div>
    </div>

    <!-- PRODUTO 3 -->
    <div class="col-md-6 col-lg-4">
      <div class="card produto-card h-100">
        <img src="image/ssd1tb.png" class="card-img-top" alt="SSD 1TB NVMe">
        <div class="card-body d-flex flex-column">
          <h5 class="card-title">SSD NVMe 1TB Gen4</h5>
          <p class="card-text text-light">Alta velocidade para carregar jogos e programas instantaneamente.</p>
          <p class="fw-bold text-danger fs-5 mt-auto">R$ 499,00</p>
          <a href="#" class="btn btn-danger mt-2"><i class="bi bi-cart"></i> Comprar</a>
        </div>
      </div>
    </div>

    <!-- PRODUTO 4 -->
    <div class="col-md-6 col-lg-4">
      <div class="card produto-card h-100">
        <img src="image/controleXbox.png" class="card-img-top" alt="Controle Xbox Series">
        <div class="card-body d-flex flex-column">
          <h5 class="card-title">Controle Xbox Series X/S</h5>
          <p class="card-text text-light">Ergonomia e precisão para suas partidas mais intensas.</p>
          <p class="fw-bold text-danger fs-5 mt-auto">R$ 499,00</p>
          <a href="#" class="btn btn-danger mt-2"><i class="bi bi-cart"></i> Comprar</a>
        </div>
      </div>
    </div>

    <!-- PRODUTO 5 -->
    <div class="col-md-6 col-lg-4">
      <div class="card produto-card h-100">
        <img src="image/cadeiraGamer.png" class="card-img-top" alt="Cadeira Gamer RGB">
        <div class="card-body d-flex flex-column">
          <h5 class="card-title">Cadeira Gamer RGB Comfort</h5>
          <p class="card-text text-light">Conforto e estilo com iluminação RGB integrada.</p>
          <p class="fw-bold text-danger fs-5 mt-auto">R$ 1.299,00</p>
          <a href="#" class="btn btn-danger mt-2"><i class="bi bi-cart"></i> Comprar</a>
        </div>
      </div>
    </div>

    <!-- PRODUTO 6 -->
    <div class="col-md-6 col-lg-4">
      <div class="card produto-card h-100">
        <img src="image/memoriaRam.png" class="card-img-top" alt="Memória RAM DDR5">
        <div class="card-body d-flex flex-column">
          <h5 class="card-title">Memória RAM DDR5 32GB 6000MHz</h5>
          <p class="card-text text-light">Desempenho extremo para gamers e criadores.</p>
          <p class="fw-bold text-danger fs-5 mt-auto">R$ 799,00</p>
          <a href="#" class="btn btn-danger mt-2"><i class="bi bi-cart"></i> Comprar</a>
        </div>
      </div>
    </div>

  </div>
</main>

<!-- FOOTER -->
<footer>
  <p>© 2025 DualCore Tech — Todos os direitos reservados.</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
    $(document).ready(function() {
        $('#descricao').summernote();
    });
</script>
</body>
</html>
