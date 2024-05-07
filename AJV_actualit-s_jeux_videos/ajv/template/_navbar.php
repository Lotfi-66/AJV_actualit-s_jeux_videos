<div class="d-flex flex-column w-80">
  <a href="../games.php">
    <img class="m-2 logo" src="../img/logo.png" alt="Logo du site">
  </a>

  <nav class="navbar navbar-expand-lg w-100 border-bottom ">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarScroll">
        <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
          <li class="nav-item">
            <a class="align-self-start btn btn-primary ms-3 mb-3 text-light" aria-current="page" href="../games.php">Tous les jeux</a>
          </li>
          <span></span>






          <li class="btn-primary ms-3 mb-3 text-light">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Par console
            </a>
            <ul class="dropdown-menu">

              <?php get_all_video_games() ?>
            </ul>
          </li>

          </li>
        </ul>
      </div>
    </div>
  </nav>
</div>