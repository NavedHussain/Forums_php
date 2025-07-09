<?php
  echo '
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="/forum">iDiscuss</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"   data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"  aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto ">
            <li class="nav-item active">
              <a class="nav-link " href="/forum">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.php">About</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              Categories
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="contact.php">Contact</a>
            </li>
          </ul>

          <div class="d-flex justify-content-between align-items-center px-3 py-2">
    <!-- Left: Search Bar -->
    <form class="d-flex my-0">
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-success" type="submit">Search</button>
    </form>

    <!-- Right: Login & Signup -->
    <div>
      <button class="btn btn-outline-success mx-2" data-bs-toggle="modal" data-bs-target="#loginModal">Login</button>
      <button class="btn btn-outline-success mx-2" data-bs-toggle="modal" data-bs-target="#signupModal">Signup</button>
    </div>
  </div>


          <!-- <div class=" mx-2">
            <form class="d-flex my-2">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
            <button class="btn btn-primary  mx-2">Login</button>
              <button class="btn btn-primary  mx-2">Singup</button>
          </div> -->


          <!-- <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2"type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>

          </form> -->
        </div>
      <!-- </div> -->
    </nav>';

    include 'partials/_loginModal.php';
    include 'partials/_signupModal.php';

 ?>
