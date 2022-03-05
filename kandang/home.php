<!DOCTYPE html>
<html lang="en">
<head>
  <title>HALAMAN PETERNAK</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<style>
	.navbar{
		background-color: rgb(253, 239, 181);
		color:white;
	}
	.container-fluid {
		background-color:orange;
	}
	.container{
		background-color:whitesmoke;
	}
  .carousel-inner img {
    width: 100%;
    height: 100%;
   }
  
</style>
<body>

<nav class="navbar navbar-expand-lg navbar-light sticky-top">
  <a class="navbar-brand" href="#home"><img src="../images/logo.png"width="30px"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
	<li class="nav-item">
        <a class="nav-link" href="#home">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php">kondisi kandang</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#contact">contact</a>
      </li>
</ul>

<a id="logout" href="../logout.php" class="btn btn-outline-success mr-3">Logout</a> 
</div>
</nav>

<div class="container-fluid" id="home">
    <div class="container">
 
  <div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="../images/Peternakan-Ayam.jpg" alt="Los Angeles" width="1100" height="500">
      <div class="carousel-caption">
        <h3>SELAMAT DATANG DI PETERNAKAN AYAM</h3>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="../images/peternakan.jpg" alt="Chicago" width="1100" height="500">
      <div class="carousel-caption">
      <h3>SELAMAT DATANG DI PETERNAKAN AYAM</h3>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="../images/payam.jpg" alt="New York" width="1100" height="500">
      <div class="carousel-caption">
      <h3>SELAMAT DATANG DI PETERNAKAN AYAM</h3>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

</div>

<div class="container" id="contact"
</div>

</body>
</html>
