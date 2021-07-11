<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Books</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
    crossorigin="anonymous" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
    crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="CSS/style.css">
  <link rel="stylesheet" href="CSS/footer.css">
  <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">

</head>
<body>
<header>
  <!-- NAVBAR -->
    <div class="container-fluid p-0">
      <nav class="navbar navbar-expand-lg">
        <a class="navbar-brand" href="index.php" style="font-weight: bold;">
          <i class="fas fa-university fa-2x mx-3"></i>BANK OF CHITTORGARH</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
          <ul class="navbar-nav ml-auto text-right">
            <li class="nav-item">
              <a class="nav-link active-home" href="index.php" style="font-weight:bold;">HOME</a>
            </li>
            
          </ul>
        </div>
      </nav>
    </div>
    <!-- CONTENT 1 -->
    
    <div class="container text-center">
      <div class="row">
        <div class="col-md-7 col-sm-12  text-white">
          <h1>BANK OF CHITTORGARH</h1>
          <p>
            YOUR PERFECT BANKING PARTNER
          </p>
          <a href="#service"><button class="btn btn-light px-5 py-2 primary-btn">GET STARTED</button></a>
        </div>
      <div class="col-md-5 col-sm-12  h-25">
        <img class="responsive" src="bank.png" alt="Book" />
    </div>
</header>

<!-- SERVICES -->
<section class="service" id="service">
  <div class="container">
    <h2 class="title">WE PROVIDE A WIDE RANGE<br> OF SERVICES</h2>
    <p class="subtitle">LET'S START WITH BANK OF CHITTORGARH</p>
      <div class="row offset-md-3">
        <div class="col-md-4">
          <a href="transactionDetails.php" style="text-decoration:none; color:black;">
            <div class="service-box">
              <i class="fa fa-history fa-5x" style="margin-bottom:50px"></i>
              <h6>TRANSACTION HISTORY</h6>
              <p>View the records of every transaction</p>
              <i class="fa fa-arrow-right"></i>
            </div>
          </a>
        </div>
        <div class="col-md-4">
          <a href="viewusers.php" style="text-decoration:none; color:black;">
            <div class="service-box">
              <i class="fa fa-users fa-5x" aria-hidden="true"></i>
              <h6>VIEW CUSTOMERS</h6>
              <p>View all the customers having account in our bank</p>
              <i class="fa fa-arrow-right"></i>
            </div>
          </a>
        </div>    
      </div>
  </div>
</section>
<br></br>
<br></br>
<br></br>
<br></br>
<!-- ABOUT US -->
<footer id="foot">
  <div class="container-fluid p-0">
    <div class="row text-left">
      <div class="col-md-5 col-sm-5">
        <p class="pt-4 text-muted">Copyright ©2021 All rights reserved by
          <span>Sejal Panwar</span> <br>The Sparks Foundation</br>
          
        </p>
      </div>
    
    </div>
  </div>
 </footer>
</body>
</html>