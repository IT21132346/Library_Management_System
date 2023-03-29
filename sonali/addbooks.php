<!DOCTYPE html>
<html>
 <head>
 <title>Sagacious Library</title>
 <link rel="shortcut icon"  href="images/lg.pg" />
		<link rel="stylesheet" href="css/Header.css">
        <link rel="stylesheet" href="css/footerab.css">
		<link rel="stylesheet" href="css/verticle_nav.css">
		<link rel="stylesheet" href="css/content.css">
		<link rel="stylesheet" href="css/addbooks.css">
		
  
 </head>
 
 <body style="background-image:url('image/ab.jpg'); background-repeat: no-repeat;background-size: cover;background-attachment: fixed;">
	
	<?php
	include_once 'config.php';
	error_reporting(0);
	?>
	
	
<?php
        if(isset($_POST['submit'])){
	      $bookID = $_POST["bookID"];
		  $bookname = $_POST["bookname"];
		  $ISBNnumber=$_POST["ISBNnumber"];
		  $category=$_POST["category"];
		  $author=$_POST["author"];
	
	    $sql= "INSERT INTO book(bookID,bookname,ISBNnumber,category,author)VALUES('','$bookname','$ISBNnumber','$category','$author')";
        if(mysqli_query($connection,$sql)){
          echo "Inserted successfully!!";
        }
         else{
        echo "error,records not added</script>";
        }
		
		mysqli_close($connection);
		}
			
		?>
		
    <!--Header-->
	<nav>
       <div class="btna ">

<a href="loginselector.html"><button class="btn" name="button1"><b>Logout</b></button></a>
</div>

        
		<a class="login" href=""><img id="logo" src="image/lg.jpg" alt="logo"></a>

        <ul class="navigation">
          <li><b><a id="nav1" href="../pasindu/Home1.html">Home</a></b></li>
          <li><b><a id="nav1" href="collection.html"> Collection</a></b></li>
          <li><b><a id="nav1" href="../navinga/aboutus.php">About Us</a></b></li>
          <li><b><a id="nav1" href="../malith/search.html">search </a></b></li>
        </ul>
    </nav>
	
	
	
	
	
	<!--verticle Navigation Bar-->
	<div class="side" >
		<ul class="side">
			<li><a class="side" href="../navinga/loginassistant.php" >Profile </a></li>
			<li><a class="side" href="addbooks.php">Add books</a></li>
			<li><a class="side" href="managebooks.php" >Manage books</a></li>
			<li><a class="side" href="returnbooks.php" >return books</a></li>
			<li><a class="side" href="showreturnedbooks.php" > show returned books</a></li>
			<li><a class="side" href="acceptre.php" > accept book requests</a></li>
			
			
		</ul>
	</div>
	
	<div class="content">
		<center> <b style="font-size:48px; color:black">&ensp;&ensp;&ensp;ADD BOOKS </b><center>
		<div class="container">
			<form method="POST" action="addbooks.php">
			<label class="ab" for="name" style="color:black;">book name&ensp;&ensp; : </label>				
				<input class="cd" style="margin-left:91px" type="text" value="" id="cemail" name="bookname"> </br>
				<label class="ab" for="name" style="color:black;">isbn number : </label>				
				<input class="cd" style="margin-left:91px" type="text" value="" id="cemail" name="ISBNnumber"> </br>
				<label class="ab" for="name" style="color:black;">category&ensp; &ensp;&emsp;: </label>				
				<input class="cd" style="margin-left:91px" type="text" value="" id="cemail" name="category"> </br>
				<label class="ab" for="name" style="color:black;">author&ensp;&ensp; &ensp;&emsp;&nbsp;: </label>				
				<input class="cd" style="margin-left:91px" type="text" value="" id="cemail" name="author"> </br>
				
				
				<center><input classs="submit" type="submit" value="submit" name="submit" style="margin-top:25px;margin-left:30px; margin-bottom:20px;"></center>
				</div>
			</form>
		</div>
	</div>
	
</BR></BR></BR></BR></BR></BR></BR></BR></BR></BR></BR></BR></BR></BR></BR></BR></BR></BR></BR></BR></BR></BR></BR></BR></BR></BR></BR></BR></BR></BR></BR></BR></BR>
	
	
	<!--footer section-->
	<footer class= "s-footer">
	<div>
	<center><img id="logo" src="image/lg.jpg" alt="logo"></center>
	
	<div class="row">
	
	<div class = "col">
	<h3>Contact us</h3>
	<ul class = "footerlinks">
	      <li><b><a id="nav1" href="../pasindu/Home1.html">Home</a></b></li>
          <li><b><a id="nav1" href="collection.html"> Collection</a></b></li>
          <li><b><a id="nav1" href="../navinga/aboutus.php">About Us</a></b></li>
          <li><b><a id="nav1" href="../malith/search.html">search </a></b></li>
	</ul>
	</div>
	
	<div class = "col">
	<h3>Useful links</h3>
	<ul class = "footerlinks">
	<li><a href ="http://www.natlib.lk/">National Library of Sri Lanka</a></li>
    <li><a href ="https://librarycampaign.com/publicity-tools/?gclid=CjwKCAjwzOqKBhAWEiwArQGwaDYJUVoJnCd4b4e8HvjcM3l2-olA5iRQV5Iz8IvAJtZitaMPBkFoVhoCpiQQAvD_BwE">The Library Campaign</a></li>
    <li><a href ="https://librarycampaign.com/publicity-tools/?gclid=CjwKCAjwzOqKBhAWEiwArQGwaDYJUVoJnCd4b4e8HvjcM3l2-olA5iRQV5Iz8IvAJtZitaMPBkFoVhoCpiQQAvD_BwE">Room to Read</a></li>
    <li><a href ="https://librarycampaign.com/publicity-tools/?gclid=CjwKCAjwzOqKBhAWEiwArQGwaDYJUVoJnCd4b4e8HvjcM3l2-olA5iRQV5Iz8IvAJtZitaMPBkFoVhoCpiQQAvD_BwE">Pasific Atrocities Education</a></li>
    <li><a href ="https://asiafoundation.org/?gclid=CjwKCAjwzOqKBhAWEiwArQGwaHJ_6jE3ZXrnLQXgjWy1OyuJKMNo5dWUd0DhZWDYbKUPOUNFkB1mnBoC2fgQAvD_BwE">The Asia Foundation</a></li>
    </ul>
</div>
	
	<div class = "col">
	<h3>Contact us</h3>
	<ul class = "footerlinks">
	<li>Email : sagaciouslibrary@gmail.com</li>
	<li>Phone : +94012345656</li>
	<li></li>
	</ul>
	</div>
	
	<div class = "col">
	<h3>Connect us</h3>
	<div class = "row">
	<ul>
             
             <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

            <a href="https://www.facebook.com/profile.php?id=100073239021466" class="fa fa-facebook"></a>
            <a href="https://twitter.com/SagaciousLibra1" class="fa fa-twitter"></a>
			<a href="https://www.instagram.com/sagacious_library/" class="fa fa-instagram"></a>
			 
			 

    </ul>
	</div>
	</div>
	</div>	
	
	<hr/>
	<center>
	<p class="copyright-text">Copyright &copy; 2021 All Rights Reserved by 
         <a href="#">SAGACIOUS</a>.
            </p>
			</center>
	</footer>
	

 </body>
 </html>