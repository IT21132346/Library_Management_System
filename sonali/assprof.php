<?php

include_once 'config.php';

session_start();


$sql = "SELECT * FROM assistant WHERE assistantname ='$_SESSION[assistantname]'";
$result = mysqli_query($connection,$sql);
$rows = mysqli_num_rows($result);



if($rows>0)
{
$array = mysqli_fetch_assoc($result);
}



$connection -> close();
?>




<html>
	<head>
	<title>Sagacious Library</title>
	<link rel="shortcut icon" href="image/lg.jpg" />
		<link rel="stylesheet" href="css/Header.css">
		<link rel="stylesheet" href="css/footerprof.css">

		<link rel="stylesheet" href="css/verticle_nav_sb.css">
		<link rel="stylesheet" href="css/content.css">
	</head>

	<body style=" background-image:url(image/av.jpg); background-repeat: no-repeat;background-size: cover;background-attachment: fixed;">
	
	
	
	
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
	<div class="side" style ="top : 100px;">
		<ul class="side">
			<li><a class="side" href="assistantProfile.php" >Profile</a></li>
			<li><a class="side" href="Addbooks.php">Add books</a></li>
			<li><a class="side" href="managebooks.php" >Manage books</a></li>
			<li><a class="side" href="returnbooks.php" >return books</a></li>
			<li><a class="side" href="showreturnedbooks.php" > show return books</a></li>
			<li><a class="side" href="acceptre.php" > accept book requests</a></li>
			
		</ul>
	</div>
	<br><br><br><br><br><br><br>
<div class="content" style = "left : 250px">	
<div class ="itemdata">
<div class="container" style = "background-color: rgba(0,0,0,0.3);">
<div style = "position:relative;top:5px;color:black;font-size:48px;"><center><b>assistant Profile Update</b></center></div>	
<form method="POST" action="updateeditassis.php">
 <table border = "0" width ="25%">
	
			
		
				<label class="ab" for="uid"> ID : </label>				
				<input class="cd" style="margin-left:78px" type="text" id="uid" name="clerkID" value="<?php echo $array['assistantID']; ?>" readonly /></td>
	 
				
				<label class="ab" for="uname">assistantname : </label> 				
				<input class="cd" style="margin-left:53px" type="text" id="uname" name="assistantname" value="<?php echo $array['assistantname']; ?>" > </br>
				
				<label class="ab" for="email">Email : </label>				
				<input class="cd" style="margin-left:91px" type="email" id="email" name="email" value="<?php echo $array['email']; ?>" ></br>
				
				<label class="ab" for="mobile">Mobile number : </label>				
				<input class="cd" style="margin-left:24px" type="text" id="mob_number" name="mobile" value="<?php echo $array['mobile']; ?>" > </br>
				
				
				
							

	 
	
	 
	 <tr>
		<td></td>
		<td><input type="submit" value = "Update" name="submit" /></td>
	 </tr>
	
 
 </table>
 </form>
 </div>
 
 
 
 </div>

	</div>
	
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