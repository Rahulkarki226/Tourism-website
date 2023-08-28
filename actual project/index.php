<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="index.css">
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,500;1,100;1,200;1,300;1,400&display=swap"
    rel="stylesheet">
</head>

<body>

<!-- navigation bar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">MR.TRAVEL</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#section1">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="book.php">Book</a>
        </li>
      </ul>
    </div>
  </nav>

  <!-- carousel -->
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="image/home-slide-3.jpg" alt="First slide">
        <div class="carousel-caption d-none d-md-block">
          <h1>TRAVEL AROUND THE WORLD</h1>
          <h4>Explore Discover Travel</h4>
        </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="image/home-slide-2.jpg" alt="Second slide">
        <div class="carousel-caption d-none d-md-block">
          <h1>MAKE YOUR TOUR WORTHWHILE</h1>
          <h4>Explore Discover Travel</h4>
        </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="image/home-slide-1.jpg" alt="Third slide">
        <div class="carousel-caption d-none d-md-block">
          <h1>DISCOVER THE NEW PLAN</h1>
          <h4>Explore Discover Travel</h4>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

<!-- about us section  -->
  <section class="my-5">
    <div class="py-5">
      <h2 class="text-center">About Us</h2>
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-12">
          <img src="image/aboutus.jpg" class="img-fluid aboutimg">
        </div>
        <div class="col-lg-6 col-md-6 col-12">
          <h2 class="display-4">Welcome</h2>
          <p class="py-3">Travelers.com, your one-stop destination for all your travel needs.
            We are a team of passionate travelers who have been in the industry for 10 years.
            Our mission is to make travel accessible and enjoyable for everyone. We believe that travel
            is not just about visiting new places, but also about creating memories that will last a lifetime</p>
          <a href="about.php" class="btn btn-success">Learn more</a>
        </div>
      </div>
  </section>


  <section class="my-5" id="section1">
    <div class="py-5">
      <h2 class="text-center">Our Services</h2>
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-12">
          <div class="card">
            <img class="card-img-top" height="320px" src="image/services2.jpeg" alt="Card image">
            <div class="card-body">
              <h4 class="card-title">Popular Restaurants</h4>
              <p class="card-text">Australia:$560</p>
              <a href="book.php" class="btn btn-dark">Book Now</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-12">
          <div class="card">
            <img class="card-img-top" height="320px" src="image/services1.jpeg" alt="Card image">
            <div class="card-body">
              <h4 class="card-title">The Perfect city break</h4>
              <p class="card-text">Qatar:$890</p>
              <a href="book.php" class="btn btn-dark">Book Now</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-12">
          <div class="card">
            <img class="card-img-top" height="320px" src="image/services3.jpeg" alt="Card image">
            <div class="card-body">
              <h4 class="card-title">Relax,reset and recuperate</h4>
              <p class="card-text">Calfornia:$999</p>
              <a href="book.php" class="btn btn-dark">Book Now</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="my-5">
    <div class="py-5">
      <h2 class="text-center">Our Gallery</h2>
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-12">
          <img src="image/img-1.jpg" class="img-fluid pb-4">
        </div>
        <div class="col-lg-4 col-md-4 col-12">
          <img src="image/img-2.jpg" class="img-fluid pb-4">
        </div>
        <div class="col-lg-4 col-md-4 col-12">
          <img src="image/img-3.jpg" class="img-fluid pb-4">
        </div>
        <div class="col-lg-4 col-md-4 col-12">
          <img src="image/img-4.jpg" class="img-fluid pb-4">
        </div>
        <div class="col-lg-4 col-md-4 col-12">
          <img src="image/img-5.jpg" class="img-fluid pb-4">
        </div>
        <div class="col-lg-4 col-md-4 col-12">
          <img src="image/img-6.jpg" class="img-fluid pb-4">
        </div>
        <div class="col-lg-4 col-md-4 col-12">
          <img src="image/img-7.jpg" class="img-fluid pb-4">
        </div>
        <div class="col-lg-4 col-md-4 col-12">
          <img src="image/img-8.jpg" class="img-fluid pb-4">
        </div>
        <div class="col-lg-4 col-md-4 col-12">
          <img src="image/img-9.jpg" class="img-fluid pb-4">
        </div>
      </div>
    </div>
  </section>

  <!-- FORM -->
  <section class="my-5">
    <div class="py-5">
      <h2 class="text-center">Contact us</h2>
    </div>
    <div class="w-50 m-auto">
      <form action="userinfo.php" method="post">
        <div class="form-group">
          <label>Username</label>
          <input type="text" name="user" autocomplete="off" class="form-control">
        </div>
        <div class="form-group">
          <label>Email Id</label>
          <input type="text" name="email" autocomplete="off" class="form-control">
        </div>
        <div class="form-group">
          <label>Mobile no.</label>
          <input type="text" name="mobile" autocomplete="off" class="form-control">
        </div>
        <div class="form-group">
          <label>Comments</label>
          <textarea class="form-control" name="comments"></textarea>
        </div>
        <button type="submit" class="btn btn-success">Submit</button>
      </form>
    </div>
  </section>

  <!--FOOTER  -->

  <footer>
    <div class="container">
      <p>Copyright © 2023 Travelers.com. All rights reserved.</p>
      <p>
        <a href="terms-of-use.html">Terms of Use</a> |
        <a href="privacy-policy.html">Privacy Policy</a>
      </p>
    </div>
  </footer>


  <!-- jQuery library -->
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
  <!-- Popper JS -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <!-- Latest compiled JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>