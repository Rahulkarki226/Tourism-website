<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,500;1,100;1,200;1,300;1,400&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="index.css">
</head>

<body>
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
          <a class="nav-link" href="">Services</a>
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
  <div class="heading" style="background:url(image/header-bg-2.png) no-repeat">
    <h1>Book Now</h1>
  </div>


  <section class="my-5 booking">
    <h1 class="heading-title text-center my-5">book your trip!</h1>
    <form action="book_form.php" method="post" class="book-form">
      <div class="form w-50 m-auto ">
        <div class="form-group ">
          <span>Name :</span>
          <input type="text" placeholder="Enter your name" name="name" class="form-control">
        </div>
        <div class="form-group ">
          <span>E-mail :</span>
          <input type="email" placeholder="Enter your email" name="email" class="form-control">
        </div>
        <div class="form-group">
          <span>Mobile No :</span>
          <input type="number" placeholder="Enter your number" name="phone" class="form-control">
        </div>
        <div class="form-group">
          <span>Address :</span>
          <input type="text" placeholder="Enter your address" name="address" class="form-control">
        </div>
        <div class="form-group">
          <span>Destination :</span>
          <input type="text" placeholder="Place you want to visit" name="location" class="form-control">
        </div>
        <div class="form-group">
          <span>How Many :</span>
          <input type="number" placeholder="Number of Guests" name="guests" class="form-control">
        </div>
        <div class="form-group">
          <span>Arrivals :</span>
          <input type="date" name="arrivals" class="form-control">
        </div>
        <div class="form-group">
          <span>Leaving :</span>
          <input type="date" name="leaving" class="form-control">
        </div>
        <input type="submit" value="submit" class="btn btn-success" name="send">
      </div>


    </form>
  </section>

  <footer>
    <div class="container">
      <p>Copyright © 2023 Travelers.com. All rights reserved.</p>
      <p>
        <a href="terms-of-use.html">Terms of Use</a> |
        <a href="privacy-policy.html">Privacy Policy</a>
      </p>
    </div>
  </footer>
</body>

</html>