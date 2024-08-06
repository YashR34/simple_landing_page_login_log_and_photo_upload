<?php include "db_conn.php"; ?>
<!DOCTYPE html>
<html>
<head>
	<title>View</title>
	
	<style>
		*{
			margin: 0;padding: 0;
               box-sizing: border-box;
               transition:All .2s linear
		}
		body {
			background: #fff;
			display: flex;
			justify-content: center;
			align-items: center;
			flex-wrap: wrap;
			min-height: 100vh;
		}
		.alb {
			width: 200px;
			height: 200px;
			padding: 5px;
		}
             .alb {
      height: 200px;
      width: 300px;
      margin: 20px;
      border-radius: 5px;
      overflow: hidden;
      box-shadow: 0 3px 5px #ooo;
     }
		.alb img {
			width: 100%;
			height: 100%;
			object-fit: cover;	
		}

		.alb img:hover{
          transform: scale(1.4);
          }

		a {
			text-decoration: none;
			color: black;
		}
	</style>
</head>
<body>
     <a href="ind.php">&#8592;</a>
     <?php 
          $sql = "SELECT * FROM images ORDER BY id DESC";
          $res = mysqli_query($conn,  $sql);

          if (mysqli_num_rows($res) > 0) {
          	while ($images = mysqli_fetch_assoc($res)) {  ?>
             
             <div class="alb">
             	<img src="uploads/<?=$images['image_url']?>">
             </div>
          		
    <?php } }?>
  
</body>
</html>