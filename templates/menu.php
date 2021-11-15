<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">

        <li class="nav-item">
          <a class="nav-link mt-2 mt-lg-0 ps-2 rounded <?php active(1, $sorszam) ?>" href="index.php">Főoldal</a>
        </li>
        <li class="nav-item">
          <a class="nav-link ps-2 rounded <?php active(2, $sorszam) ?>" href="festekek.php">Festékek</a>
        </li>
        <li class="nav-item">
          <a class="nav-link ps-2 rounded <?php active(3, $sorszam) ?>" href="faanyagok.php">Faanyagok</a>
        </li>
        <li class="nav-item">
          <a class="nav-link ps-2 rounded <?php active(4, $sorszam) ?>" href="szerszamkatalogus.php">Szerszamkatalógus</a>
        </li>
        <li class="nav-item">
          <a class="nav-link ps-2 rounded <?php active(5, $sorszam) ?>" href="rolunk.php">Rólunk</a>
        </li>
        <li class="nav-item">
          <a class="nav-link ps-2 rounded <?php active(6, $sorszam) ?>" href="blog.php">Blog</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
