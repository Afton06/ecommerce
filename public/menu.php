<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm sticky-top">
    <div class="container">
        <!-- LOGO -->
        <a class="navbar-brand d-flex align-items-center" href="index">
            <img src="img/logo.png" alt="DualCore Tech" width="65" height="65" class="me-2">
            <strong>DualCore Tech</strong>
        </a>

        <!-- BOTÃO MOBILE -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMenu">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- LINKS -->
        <div class="collapse navbar-collapse" id="navbarMenu">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">

                <li class="nav-item">
                    <a class="nav-link active" href="index"><i class="bi bi-house-door-fill me-1"></i> Início</a>
                </li>

                <li class="nav-item ">
                    <a class="nav-link" href="produto" role="button">
                        <i class="bi bi-cpu-fill me-1"></i> Peças de Computador
                    </a>
                
                </li></a>
               
                <li class="nav-item">
                    <a class="nav-link" href="carrinho"><i class="bi bi-tags-fill me-1"></i> Promoções</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="carrinho" role="button">
                      <i class="bi bi-cart"></i> Carrinho
                    </a>
                </li>

            </ul>

            <!-- USUÁRIO LOGADO -->
            <div class="d-flex align-items-center text-white">
                <i class="bi bi-person-circle me-2 fs-5"></i>
                <span class="me-3">Olá, <strong><?= $_SESSION["user"]["nome"] ?></strong></span>
                <a href="sair.php" class="btn btn-outline-danger btn-sm">
                    <i class="bi bi-box-arrow-right"></i> Sair
                </a>
            </div>
        </div>
    </div>
</nav>

<div id="carouselExampleIndicators" class="carousel slide mb-5">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>

  <div class="carousel-inner rounded-3 shadow-lg overflow-hidden">
    <div class="carousel-item active">
      <img src="img/banner1.png" class="d-block w-90 carousel-img" alt="Banner 1">
    </div>
    <div class="carousel-item">
      <img src="img/nintendoSwitch2.png" class="d-block w-90 center carousel-img" alt="Nintendo Switch">
    </div>
    <div class="carousel-item">
      <img src="img/notebookGamer.png" class="d-block w-90 carousel-img" alt="Notebook Gamer">
    </div>
  </div>

  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon bg-dark rounded-circle p-2" aria-hidden="true"></span>
    <span class="visually-hidden">Anterior</span>
  </button>

  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon bg-dark rounded-circle p-2" aria-hidden="true"></span>
    <span class="visually-hidden">Próximo</span>
  </button>
</div>

<!-- LINKS DO BOOTSTRAP -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
