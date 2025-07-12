<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome to iDiscuss - Coding Forums</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <style>
    #ques {
        min-height: 433px;
    }
    </style>
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

    <?php
    $showAlert=false;
     $method = $_SERVER['REQUEST_METHOD'];
     if ($method=='POST'){
      //inster into threas into DB
      $th_title = $_POST['title'];
      $th_desc = $_POST['desc'];
      $sql =  "INSERT INTO `threads` (`thread_title`, `thread_desc`, `thread_cat_id`, `thread_user_id`, 
      `timestamp`) VALUES ( '$th_title', '$th_desc', '$id', '0', current_timestamp())";
       $result = mysqli_query($conn,$sql);
       $showAlert=true;
      if($showAlert){
          echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Success! </strong> Your thread hasbeen added! Please wait for community to
                 respond.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
          </div>';
      }
     }
      ?>


    <!-- Categories start here -->
    <div class="container my-4">

        <div class="jumbotron">
            <h1 class="display-4">Welcome to <?php echo $catname; ?> forums</h1>
            <p class="leas"><?php echo $catdesc; ?></p>
            <hr class="my-4">
            <p> This is a perr to peer forum.No Spam / Advertising / Self-promote in the forums is not allowed.
                Do not post copyright-infringing material.Do not post “offensive” posts, links or images.
                Do not cross post questions.Remain respectful of other members at all times.</p>
            <a class="btn btn-success btn-lg" href="#" role="button">learn more</a>
        </div>
    </div>

    <div class="container">
        <h1 class="py-2">Start a Discussion </h1>
        <form action="<?php echo $_SERVER['REQUEST_URI'] ?> " method="post">
            <div class="form-group">
                <label for="exampleInputEmail1">Problem Title</label>
                <input type="text" class="form-control" id="title" name="title" aria-describedby="emailHelp">
                <small id="emailHelp" class="form-text text-muted">Keep your title as shott and crisp as
                    possible.</small>
            </div>
            <div class="form-group">
                <br> <label for="exampleFromControlTextarea1">Ellaborate Your Concern</label>
                <textarea class="form-control" id="desc" name="desc" rows="3"></textarea>
            </div> <br>

            <button type="submit" class="btn btn-success">Submit</button>
        </form>

    </div>

    <div class="container" id="ques">
        <h1 class="py-2">Browse Question</h1>
        <?php
    $id = $_GET['catid'];
      $sql =  "SELECT * FROM `threads` WHERE thread_cat_id=$id;";
      $result = mysqli_query($conn,$sql);
      $noResult = true;
      while ($row = mysqli_fetch_assoc($result)){
            $noResult = false;
        $id = $row['thread_id'];
        $title = $row['thread_title'];
        $desc = $row['thread_desc'];



  echo '<div class="d-flex align-items-center my-3">
    <img src="images.png" width="54px" class="me-3" alt="...">
      <div class="media-body">
        <h5 class="mt-0 mb-1">  <a href="thread.php?threadid='. $id . '">'. $title .' </a></h5>
        '. $desc .'
      </div>
    </div>';
  }
  // echo var_dump($noResult);
  if($noResult){
          echo '<div class=jumbotron jumbotron-fluid">
          <div class="container">
          <p class="display-4">No Thread Found</p>
          <p class="lead">Be the frist person to ask a question</p>
          </div>
    </div>';

  }
?>

    </div>

    <?php  include 'partials/_footer.php'; ?>
    <!-- Bootstrap Bundle JS (includes Popper.js) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.min.js"
        integrity="sha384-7qAoOXltbVP82dhxHAUje59V5r2YsVfBafyUDxEdApLPmcdhBPg1DKg1ERo0BZlK" crossorigin="anonymous">
    </script>
</body>

</html>