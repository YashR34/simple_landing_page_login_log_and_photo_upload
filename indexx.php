<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/stylee.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> 
   <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Josefin+Sans">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/css/lightgallery.min.css">
   
   <style>
     *{
      margin: 0;padding: 0;
      box-sizing: border-box;
      transition:All .2s linear ;
     }
     body{
      background: #fff;
     }
     .Gallery {
      display: flex;
      justify-content: center;
      flex-wrap: wrap;
      width: 90%;
      margin: 0 auto;

     }
     .Gallery a{
      height: 200px;
      width: 300px;
      margin: 20px;
      border-radius: 5px;
      overflow: hidden;
      box-shadow: 0 3px 5px #ooo;
     }
     .Gallery  a img{
      height: 100%;
      width: 100%;
      object-fit: cover;
     }
     .Gallery a img:hover{
      transform: scale(1.4);
     }
     h2{
      font-size: 20px;
      margin-top: 10px;
      text-align: center;
      text-transform: uppercase;
     }
   </style>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Yash Technical</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="indexx.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">services</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">about</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">contact</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="login/login-user.php">Log In/SignUp</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="upload/ind.php">Upload Images</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="gallery.php">Our Gallery</a>
      </li>
      
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
  <div id="demo" class="carousel slide" data-ride="carousel">
    
    <ul class="carousel-indicators">
      <li data-target="#demo" data-slide-to="0" class="active"></li>
      <li data-target="#demo" data-slide-to="1"></li>
      <li data-target="#demo" data-slide-to="2"></li>
      <li data-target="#demo" data-slide-to="3"></li>
      <li data-target="#demo" data-slide-to="4"></li>
    </ul>
    <div class="carousel-inner">

      <div class="carousel-item active">
        <img src="img/hp.jpg" alt="Himachal Pradesh" width="1100" height="500">
        <div class="carousel-caption">
          <h3>Himachal pradesh</h3>
          <p>Himachal always so much fun!</p>
        </div>
      </div>

      <div class="carousel-item">
        <img src="img/jh.jpeg" alt="Jharkhand" width="1100" height="500">
        <div class="carousel-caption">
          <h3>Jharkhand</h3>
          <p>Thank you, Jharkhand!</p>
        </div>
      </div>
    
      <div class="carousel-item">
        <img src="img/mh.jpg" alt="Maharashtra" width="1100" height="500">
        <div class="carousel-caption">
          <h3>Maharashtra</h3>
          <p>We love the Big Mangoes!</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="img/goa.jpg" alt="Goa" width="1100" height="500">
        <div class="carousel-caption">
          <h3>Goa</h3>
          <p>Everyone Favourite!</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="img/oh.jpg" alt="Odisha" width="1100" height="500">
        <div class="carousel-caption">
          <h3>Odisha</h3>
          <p>City of Temples!</p>
        </div>
      </div>
  
    </div>
>
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
      <span class="carousel-control-next-icon"></span>
    </a>
  </div>
</div>
<section class="my-5">
  <div class="py-5">
    <h2 class="text-center">About Us</h2>
  </div>
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-6 col-md-6 col-12">
        <img src="img/ab.jpg" class="img-fluid aboutimg">
      </div>
      <div class="col-lg-6 col-md-6 col-12">
        <h2 class="display-4">I am Yash Technical.</h2>
        <p class="py-3">Tourism is a social, cultural and economic phenomenon which entails the movement of people to countries or places outside their usual environment for personal or business/professional purposes.</p>
        <a href="about.php" class="btn btn-success">Know More</a>
      </div>
    </div>
  </div>
</section>
<section class="my-5">
<div class="py-5">
   <h2 class="text-center">Our Services</h2>
</div>
<div class="container-fluid">
  <div class="row">
    <div class="col-lg-4 col-md-4 col-12">
      <div class="card">
        <img class="card-img-top" src="img/mh.jpg" alt="card img">
          <div class="card-body">
            <h4 class="card-title">beautiful nature</h4>
            <p class="card-text">some example text.</p>
            <a href="#" class="btn btn-success">see profile</a>
          </div>
        </div>

      </div>
      <div class="col-lg-4 col-md-4 col-12">
      <div class="card">
        <img class="card-img-top" src="img/mh.jpg" alt="card img">
          <div class="card-body">
            <h4 class="card-title">beautiful nature</h4>
            <p class="card-text">some example text.</p>
            <a href="#" class="btn btn-success">see profile</a>
          </div>
        </div>
        
      </div>
      <div class="col-lg-4 col-md-4 col-12">
      <div class="card">
        <img class="card-img-top" src="img/mh.jpg" alt="card img">
          <div class="card-body">
            <h4 class="card-title">beautiful nature</h4>
            <p class="card-text">some example text.</p>
            <a href="#" class="btn btn-success">see profile</a>
          </div>
        </div>
        
      </div>
    </div>
  </div>
</section>
<section >


 <h2>Our Gallery</h2>
 <div class="Gallery">
    <?php include "upload/db_conn.php"; ?>
    <?php 
          $sql = "SELECT * FROM images ORDER BY id DESC";
          $res = mysqli_query($conn,  $sql);

          if (mysqli_num_rows($res) > 0) {
            while ($images = mysqli_fetch_assoc($res)) {  ?>
             
           
              <a href="upload/uploads/<?=$images['image_url']?>">
              <img src="upload/uploads/<?=$images['image_url']?>">
            </a>
             
              
    <?php } }?>
  </div>

  <div class="text-center">
     <a href="upload/view.php" class="btn btn-success">View More</a> 
  </div>


</section>
<section class="my-5">
  <div class="py-5">
    <h2 class="text-center">contact us</h2>
  </div>
  <div class="w-50 m-auto">
    <form action="userinfo.php" method="post">
      <div class="form-group">
        <label>username</label>
        <input type="text" name="user" autocomplete="off" class="form-control">
        
      </div>
      <div class="form-group">
        <label>email id</label>
        <input type="text" name="email" autocomplete="off" class="form-control">
        
      </div>
      <div class="form-group">
        <label>mobile</label>
        <input type="text" name="mobile" autocomplete="off" class="form-control">
        
      </div>
      <div class="form-group">
        <label>comment</label>
        <textarea class="form-control" name="comment">
          
        </textarea>
        
      </div>
      <button type="submit" class="btn btn-success">submit</button>

    </form>
  </div>

  </section>
  <footer>
    <p class="p-3 bg-dark text-white text-center">@yashtecnicalproduction 9872344122</p>
  </footer>
  


<script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/js/lightgallery.min.js" >
  
</script>
<script>
  lightGallery(document.querySelector('.Gallery'));
</script>       

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>  
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" ></script>  
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" ></script>

</body>
</html>