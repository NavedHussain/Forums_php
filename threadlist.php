<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome to iDiscuss - Coding Forums</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
  </head>
  <body>
    <?php  include 'partials/_header.php'; ?>
    <?php  include 'partials/_dbconnect.php'; ?>
    <?php
    $id = $_GET['catid'];
      $sql =  "SELECT * FROM `categories` WHERE category_id=$id";
      $result = mysqli_query($conn,$sql);
      while ($row = mysqli_fetch_assoc($result)){
        $catname = $row['category_name'];
        $catdesc = $row['category_description'];

        }
     ?>


  <!-- Categories start here -->
        <div class="container my-4">

          <div class="jumbotron">
            <h1 class="display-4">Welcome to <?php echo $catname; ?> forums</h1>
            <p class="leas"><?php echo $catdesc; ?>.</p>
            <hr class="my-4">
          <p> This is a perr to peer forum.No Spam / Advertising / Self-promote in the forums is not allowed.
              Do not post copyright-infringing material.Do not post “offensive” posts, links or images.
              Do not cross post questions.Remain respectful of other members at all times.</p>
            <a class="btn btn-success btn-lg" href="#" role="button">learn more</a>
          </div>
      </div>

      <div class="container">
    <h1 class="py-2">Browse Question</h1>
    <?php
    $id = $_GET['catid'];
      $sql =  "SELECT * FROM `threads` WHERE thread_cat_id=$id;";
      $result = mysqli_query($conn,$sql);
      while ($row = mysqli_fetch_assoc($result)){
        $id = $row['thread_id'];
        $title = $row['thread_title'];
        $desc = $row['thread_desc'];



  echo '<div class="d-flex align-items-center my-3">
    <img src="images.png" width="54px" class="me-3" alt="...">
      <div>
        <h5 class="mt-0 mb-1">  <a href="thread.php">'. $title .' </a></h5>
        '. $desc .'
      </div>
    </div>';
  }
?>



  <!-- Remove later; putting this just to check html alignment for now -->
  <!-- <div class="d-flex align-items-center media my-3">
  <img src="images.png" width="54px" class="me-3" alt="...">
    <div>
      <h5 class="mt-0 ">Unable to install Pyaudio error in Windows </h5>
      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
      ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
      laboris nisi ut aliquip ex ea commodo consequat.
    </div>
  </div> -->

    <?php  include 'partials/_footer.php'; ?>
  <!-- Bootstrap Bundle JS (includes Popper.js) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.min.js"
    integrity="sha384-7qAoOXltbVP82dhxHAUje59V5r2YsVfBafyUDxEdApLPmcdhBPg1DKg1ERo0BZlK" crossorigin="anonymous"></script>
  </body>
</html>
