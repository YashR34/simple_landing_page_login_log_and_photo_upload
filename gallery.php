 <!DOCTYPE html>
<html>
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.6">
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
     .Gallery{
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
     .Gallery a img{
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
        <a class="nav-link" href="login.php">Log In/SignUp</a>
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
<div class="jumbotron">
  <h1>Gallery Page</h1>
  <p> HTML, CSS...</p>
</div>
<section >
  <h2>Our Gallery</h2>
  <div class="Gallery">
   <a href="img/goa.jpg">
    <img src="img/goa.jpg" alt="goa">
   </a>
   <a href="img/hp.jpg">
    <img src="img/hp.jpg" alt="Himachal">
   </a>
   <a href="img/jh.jpeg">
    <img src="img/jh.jpeg" alt="jharkhand">
   </a>
   <a href="img/mh.jpg">
    <img src="img/mh.jpg" alt="Maharashtra">
   </a>
   <a href="img/oh.jpg">
    <img src="img/oh.jpg" alt="odisha">
   </a>
   <a href="img/s1.jpg">
    <img src="img/s1.jpg" alt="services">
   </a>


      
    </div>
   

    
  </div>
  <div class="text-center">
     <a href="upload/view.php" class="btn btn-success">View More</a> 
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
</body>
</html>
