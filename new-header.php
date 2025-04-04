<?php
// Define site URL
$site_url = "/nova-school";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Header</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="/assets/css/Header.css">
</head>

<body>
  <section class='header-section'>
    <div class='container'>
      <div class='row'>
        <div class='header-strip'>
          <div class="header-strip-div">
            <i class="bi bi-telephone"></i> 0422-2231091 / 0422-438975
          </div>
          <div class="header-strip-div">
            <i class="bi bi-envelope"></i> cbenova@gmail.com
          </div>
        </div>
      </div>
    </div>
  </section>

  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container">
      <a class="navbar-brand" href="index.php">
        <img src="img/home_new/Nova_Logo_New.png" alt='logo'>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav me-auto">
          <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="about.php">About us</a></li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="academicsDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Academics
            </a>
            <ul class="dropdown-menu" aria-labelledby="academicsDropdown">
              <li><a class="dropdown-item" href="#">B.Ed</a></li>
              <li><a class="dropdown-item" href="#">B.EL.Ed</a></li>
              <li><a class="dropdown-item" href="cbse.php">CBSE</a></li>
            </ul>
          </li>
          <li class="nav-item"><a class="nav-link" href="faculty.php">Faculty</a></li>
          <li class="nav-item"><a class="nav-link" href="facilities.php">Facilities</a></li>
          <!-- <li class="nav-item"><a class="nav-link" href="contact.php">Contact Us</a></li> -->
          <li class="nav-item"><a class="nav-link" href="gallery.php">Gallery</a></li>
        </ul>
        <div class='header-contact-div'>
          <a href="contact.php"><button class='btn btn-primary header-contact-button'>Contact Us</button></a>
        </div>
      </div>
    </div>
  </nav>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>