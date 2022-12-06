<!doctype html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>UrsInhOs</title>
  <link rel="shortcut icon" href="files/img/logo/Rectangle-177.ico" type="image/x-icon">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
  <link rel="stylesheet" href="files/css/style.css">
</head>

<body>
  <?php include 'header.php' ?>
  <!-- Carrosel -->
  <div class="container" id="carousel-home">
    <div id="carouselExampleDark" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
          aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner shadow-lg p-1 mb-5 bg-dark rounded">
        <div class="carousel-item active" data-bs-interval="10000">
          <img src="files/img/carrossel/Serie-coisa-mais-linda.jpg" class="d-block w-100 rounded" alt="...">
          <div class="linda-carousel carousel-caption d-none d-md-block m-5 rounded-4">
            <a href="serie_3.php">
              <p>"Coisa Mais Linda"</p>
            </a>
          </div>
        </div>
        <div class="carousel-item" data-bs-interval="2000">
          <img src="files/img/carrossel/netflix-banner-1024-522.jpg" class="d-block w-100 rounded" alt="...">
          <div class="propaganda-carousel carousel-caption d-none d-md-block m-5 rounded-4">
            <a href="https://www.netflix.com/br/" target="_blank">
              <p>"ASSINE JÁ"</p>
              <p>A partir de R$ 18,90 ao Mês</p>
            </a>
          </div>
        </div>
        <div class="carousel-item">
          <img src="files/img/carrossel/irmandade-2019_cke.jpg" class="d-block w-100 rounded" alt="...">
          <div class="irmandade-carousel carousel-caption d-none d-md-block m-5 rounded-4">
            <a href="serie_1.php">
              <p>"Irmandade"</p>
            </a>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>

  <!-- Seções -->
  <div class="container">

    <section class="cor-branca">
      <div class="row">
        <div class="cor-gradiente">
          <div class="col-6 col-sm-3 col-lg-2">
            <h2><a class="nav-link" href="informacao_geeks.php">Geeks - HQs</a></h2>
          </div>
        </div>
      </div>
      <div class="cor-e-espacamento row p-md-4">
        <div class="home-img col-12 col-sm-6 col-lg-3">
          <a href="informacao_geeks.php"><img src="files/img/secoes/home-geeks/hometurma-da-monica-jovem.jpg" class="img-fluid rounded"
              alt="..."></a>
        </div>
        <div class="centarlizar-p col-12 col-sm-6 col-lg-3">
          <h3><a class="nav-link" href="informacao_geeks.php">Turma da Mônica Jovem</a></h3>
          <p class="secondary-color">Realizada em: 2011</p>
        </div>
        <div class="home-img col-12 col-sm-6 col-lg-3">
          <a href="informacao_geeks.php"><img src="files/img/secoes/home-geeks/home-achados-e-perdidos.jpg" class="img-fluid rounded"
              alt="..."></a>
        </div>
        <div class="centarlizar-p col-12 col-sm-6 col-lg-3">
          <h3><a class="nav-link" href="informacao_geeks.php">Achados e Perdidos</a></h3>
          <p class="secondary-color">Realizada em: 2011</p>
        </div>
        <div class="home-img col-12 col-sm-6 col-lg-3">
          <a href="informacao_geeks.php"><img src="files/img/secoes/home-geeks/home-adormecida-cem-anos-para-sempre.jpg" class="img-fluid rounded"
              alt="..."></a>
        </div>
        <div class="centarlizar-p col-12 col-sm-6 col-lg-3">
          <h3><a class="nav-link" href="informacao_geeks.php">Adormecida: Cem Anos Para Sempre</a></h3>
          <p class="secondary-color">Realizada em: 2012</p>
        </div>
        <div class="home-img col-12 col-sm-6 col-lg-3">
          <a href="informacao_geeks.php"><img src="files/img/secoes/home-geeks/home-castanha-do-para.jpg" class="img-fluid rounded"
              alt="..."></a>
        </div>
        <div class="centarlizar-p col-12 col-sm-6 col-lg-3">
          <h3><a class="nav-link" href="informacao_geeks.php">Castanha do Pará</a></h3>
          <p class="secondary-color">Realizada em: 2016</p>
        </div>
      </div>
    </section>

    <section class="cor-branca">
      <div class="row">
        <div class="cor-gradiente">
          <div class="col-4 col-sm-3 col-lg-2">
            <h2>Séries e TV</h2>
          </div>
        </div>
      </div>
      <div class="cor-e-espacamento row p-md-4">
        <div class="home-img col-12 col-sm-6 col-lg-3">
          <a href="serie_1.php"><img src="files/img/secoes/home-geeks/sintonia.jpg" class="img-fluid rounded"
              alt="..."></a>
        </div>
        <div class="centarlizar-p col-12 col-sm-6 col-lg-3">
          <h3><a class="nav-link" href="serie_1.php">Sintonia </a></h3>
          <p class="secondary-color">Realizada em: 2019</p>
        </div>
        <div class="home-img col-12 col-sm-6 col-lg-3">
          <a href="serie_3.php"><img src="files/img/secoes/home-geeks/coisa-mais-linda.jpg" class="img-fluid rounded"
              alt="..."></a>
        </div>
        <div class="centarlizar-p col-12 col-sm-6 col-lg-3">
          <h3><a class="nav-link" href="serie_3.php">Coisa Mais Linda</a></h3>
          <p class="secondary-color">Realizada em: 2019</p>
        </div>
        <div class="home-img col-12 col-sm-6 col-lg-3">
          <a href="tv_1.php"><img src="files/img/secoes/home-geeks/salve-se-quem-puder.jpg" class="img-fluid rounded"
              alt="..."></a>
        </div>
        <div class="centarlizar-p col-12 col-sm-6 col-lg-3">
          <h3><a class="nav-link" href="tv_1.php">Salve-se Quem Puder</a></h3>
          <p class="secondary-color">Realizada em: 2020</p>
        </div>
        <div class="home-img col-12 col-sm-6 col-lg-3">
          <a href="tv_3.php"><img src="files/img/secoes/home-geeks/danilo-gentili.jpg" class="img-fluid rounded"
              alt="..."></a>
        </div>
        <div class="centarlizar-p col-12 col-sm-6 col-lg-3">
          <h3><a class="nav-link" href="tv_3.php">The Noite Com Danilo Gentili</a></h3>
          <p class="secondary-color">Realizado em: 2014</p>
        </div>
      </div>
    </section>

    <section class="cor-branca">
      <div class="row">
        <div class="cor-gradiente">
          <div class="col-4 col-sm-2 col-lg-2">
            <h2>Filmes</h2>
          </div>
        </div>
      </div>
      <div class="cor-e-espacamento row p-md-4">
        <div class="home-img col-12 col-sm-6 col-lg-3">
          <a href="filmes_1.php"><img src="files/img/secoes/home-geeks/carandiru.jpg" class="img-fluid rounded" alt="..."></a>
        </div>
        <div class="centarlizar-p col-12 col-sm-6 col-lg-3">
          <h3><a class="nav-link" href="filmes_1.php">Carandiru</a></h3>
          <p class="secondary-color">Realizada em: 2003</p>
        </div>
        <div class="home-img col-12 col-sm-6 col-lg-3">
          <a href="filmes_1.php"><img src="files/img/secoes/home-geeks/o-auto-da-compadecida.jpg" class="img-fluid rounded" alt="..."></a>
        </div>
        <div class="centarlizar-p col-12 col-sm-6 col-lg-3">
          <h3><a class="nav-link" href="filmes_1.php">O Auto da Compadecida</a></h3>
          <p class="secondary-color">Realizada em: 2000</p>
        </div>
        <div class="home-img col-12 col-sm-6 col-lg-3">
          <a href="filmes_2.php"><img src="files/img/secoes/home-geeks/cinderela-baiana.jpg" class="img-fluid rounded" alt="..."></a>
        </div>
        <div class="centarlizar-p col-12 col-sm-6 col-lg-3">
          <h3><a class="nav-link" href="filmes_2.php">Cinderela Baiana</a></h3>
          <p class="secondary-color">Realizada em: 1998</p>
        </div>
        <div class="home-img col-12 col-sm-6 col-lg-3">
          <a href="filmes_2.php"><img src="files/img/secoes/home-geeks/os-trombadinhas.jpg" class="img-fluid rounded" alt="..."></a>
        </div>
        <div class="centarlizar-p col-12 col-sm-6 col-lg-3">
          <h3><a class="nav-link" href="filmes_2.php">Os Trombadinhas</a></h3>
          <p class="secondary-color">Realizada em: 1979</p>
        </div>
      </div>
    </section>

    <section class="cor-branca">
      <div class="row">
        <div class="cor-gradiente">
          <div class="col-4 col-sm-2 col-lg-2">
            <h2>Notícias</h2>
          </div>
        </div>
      </div>
      <div class="cor-e-espacamento row p-md-4">
        <div class="home-img col-12 col-sm-6 col-lg-3">
          <a href="noticias_1.php"><img src="files/img/secoes/home-geeks/fatecon.jpg" class="img-fluid rounded" alt="..."></a>
        </div>
        <div class="centarlizar-p col-12 col-sm-6 col-lg-3">
          <h3><a class="nav-link" href="noticias_1.php">FATECon HQs</a></h3>
          <p class="secondary-color">Realizada em: 2022</p>
        </div>
        <div class="home-img col-12 col-sm-6 col-lg-3">
          <a href="noticias_4.php"><img src="files/img/geeks-hqs/ccxp.jpg" class="img-fluid rounded" alt="..."></a>
        </div>
        <div class="centarlizar-p col-12 col-sm-6 col-lg-3">
          <h3><a class="nav-link" href="noticias_4.php">CCXP é um sucesso</a></h3>
          <p class="secondary-color">Realizada em: 2022</p>
        </div>
        <div class="home-img col-12 col-sm-6 col-lg-3">
          <a href="noticias_3.php"><img src="files/img/geeks-hqs/topgunmaverick,jpg.jpg" class="img-fluid rounded" alt="..."></a>
        </div>
        <div class="centarlizar-p col-12 col-sm-6 col-lg-3">
          <h3><a class="nav-link" href="noticias_3.php">Top Gun: Maverick, melhor filme de 2022</a></h3>
          <p class="secondary-color">Realizada em: 2022</p>
        </div>
        <div class="home-img col-12 col-sm-6 col-lg-3">
          <a href="noticias_5.php"><img src="files/img/secoes/home-geeks/geek.jpg" class="img-fluid rounded" alt="..."></a>
        </div>
        <div class="centarlizar-p col-12 col-sm-6 col-lg-3">
          <h3><a class="nav-link" href="noticias_5.php">Dia do orgulho geek, Super Mario Bros</a></h3>
          <p class="secondary-color">Realizada em: 1985</p>
        </div>
      </div>
    </section>
  </div>
  <?php include 'footer.php' ?>
  <!-- Fim da Home -->
  <script>
    var nav = document.querySelector('nav');
    window.addEventListener('scroll', function () {
      if (window.pageYOffset > 100) {
        nav.classList.add('bg-dark', 'shadow')
      } else {
        nav.classList.remove('bg-dark', 'shadow');
      }
    })
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
    crossorigin="anonymous"></script>
</body>

</html>