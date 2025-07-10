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

    <!-- Slider start here -->
    <div id="carouselExampleIndicators" class="carousel slide">
<div class="carousel-indicators">
  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
</div>
<div class="carousel-inner">
  <div class="carousel-item active">
    <img src="Slide.jpg" class="d-block w-100" alt="slide" height="400" width="400">
  </div>
  <div class="carousel-item">
    <img src="Slide_1.jpg" class="d-block w-100" alt="..."  height="450" width="400">
  </div>
  <div class="carousel-item">
    <img src="Slide_3.jpg" class="d-block w-100" alt="..."  height="450" width="400">
  </div>
</div>
<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
  <span class="visually-hidden">Previous</span>
</button>
<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
  <span class="carousel-control-next-icon" aria-hidden="true"></span>
  <span class="visually-hidden">Next</span>
</button>
</div>

  <!-- Categories start here -->
        <div class="container my-4">

          <h2 class="text-center my-4">iDiscuss - Browse Categories</h2>
          <div class="row my-4">

            <!-- Fetch all the categoties and    Use a for loop to iterate through Categories -->
        <?php
           $sql =  "SELECT * FROM `categories`";
           $result = mysqli_query($conn, $sql);
           while ($row = mysqli_fetch_assoc($result)){
             // echo $row['category_id'];
             // echo $row['category_name'];
             $cat = $row['category_name'];
             $desc = $row['category_description'];
             echo  '<div class="col-md-4 my-2">
                   <div class="card" style="width: 18rem;">
           <img src="nature.jpg ' . $cat . ',coding"
           class="card-img-top" alt="">
           <div class="card-body">
             <h5 class="card-title">' . $cat . '</h5>
             <p class="card-text">' . substr ($desc, 0,90 ) . '.....</p>
             <a href="#" class="btn btn-primary">View Threads</a>
           </div>
         </div>
         </div>';

           }
        ?>
      </div>
    </div>

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
