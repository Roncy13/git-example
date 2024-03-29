  <!-- Navigation -->
  <?php 
    function getFullUrl($page) {
      echo "/simple-website/$page" === $_SERVER["REQUEST_URI"] ? "active" : "";
    }
  ?>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">Start Bootstrap</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link <?php getFullUrl("index.php"); ?>" href="index.php">Home</a>
          </li>
          <li class="nav-item">
              <a class="nav-link <?php getFullUrl("about.php"); ?>" href="about.php">About</a>
          </li>
          <li class="nav-item">
              <a class="nav-link <?php getFullUrl("contact.php"); ?>" href="contact.php">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>