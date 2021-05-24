<?php
  // Create database connection
  $db = mysqli_connect("localhost", "root", "", "project21");

  // Initialize message variable
  $msg = "";

  // If upload button is clicked ...
  if (isset($_POST['upload'])) {
  	// Get image name
  	$image = $_FILES['image']['name'];
  	// Get text
  	$image_text = mysqli_real_escape_string($db, $_POST['image_text']);
    $Posted_name = mysqli_real_escape_string($db, $_POST['Posted_name']);
    $Email =  mysqli_real_escape_string($db, $_POST['Email']);

  	// image file directory
  	$target = "images/".basename($image);

  	$sql = "INSERT INTO images (image, image_text , Posted_name , Email) VALUES ('$image', '$image_text','$Posted_name','$Email ')";
  	// execute query
  	mysqli_query($db, $sql);

  	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  		$msg = "Image uploaded successfully";
  	}else{
  		$msg = "Failed to upload image";
  	}
  }
  $result = mysqli_query($db, "SELECT * FROM images ORDER BY id DESC");
?>
<!DOCTYPE html>
<html>
<head>
<title>Image Upload</title>

<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="CSS/custom.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" >
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" >
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/7e2cd0212b.js" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
   
   <!--footer links-->
   <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>   
   
    <title>Document</title>
    <link rel="stylesheet" href="CSS/dark-mode.css">
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="CSS/mobile.css">
    <script src="./JS/script.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
</head>
<style type="text/css">
.navbar{
background-color: none;
}
body
	{
		
        font-family: 'Ubuntu', sans-serif;
		font-size: 20px;
		background-image:url('img/socia.jpg');
		background-repeat: no-repeat;
		background-size: 100% 500%;
		
		
	}
  
   form{
   	width: 50%;
   	margin: 20px auto;
   }
   form div{
   	margin-top: 5px;
   }
   #img_div{
   	width:30%;
	height:
   	padding: 5px;
   	margin: 15px auto;
   	border: 5px solid black ;
	   background-color: white;
   }
   #img_div:after{
   	content: "";
   	display: block;
   	clear: both;
   }
   img{
   	float: left;
   	margin: 5px;
   	width: 300px;
   	height: 140px;
   }
</style>
 <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
   
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <button onclick="goBack()" class="btn btn-primary rounded-pill border-light border-2 "><i class="fas fa-arrow-circle-left"></i>&nbsp;Go Back</button>

<p></p>

<script>
function goBack() {
  window.history.back();
}
</script>

   <br><br><br>
            <form id="label" method="POST" action="index.php" style="left: 60px;" enctype="multipart/form-data">
					  	<input type="hidden" name="size" value="1000000">
										<div>
					<input type="file" name="image" style="border-color: yellow">
					</div>
					<div>
					<textarea 
						id="text" 
						cols="40" 
						rows="4" 
						name="image_text" 
						placeholder="Say something about this image..."></textarea>
					<br> <textarea 
						id="text" 
						cols="40"
						name="Posted_name" 
						placeholder="Posted by"></textarea>
						<br><textarea 
						id="text" 
						cols="40"
						name="Email" 
						placeholder="Email-id"></textarea>
					</div>
					<div>
						<button type="submit" name="upload" class="btn btn-info rounded-pill border-light border-2">POST</button>
					</div>
				</form>

<div id="content" style="vertical-align:middle" >

  <?php
    while ($row = mysqli_fetch_array($result)) {
      echo "<div id='img_div'>";
      	echo "<img src='images/".$row['image']."' >";
      	echo "<p>".$row['image_text']."</p>";
        echo "<br>"."<br>"."Post-by: ".$row['Posted_name']."<br>"."Email: ".$row['Email'];
      echo "</div>";
    }

  ?>
 
</div>
<style>
.label {
float: right;
width: 10em;
margin-right: 1em;

}
</style>
        

</body>
</html>