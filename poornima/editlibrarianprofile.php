<?php

include_once 'config.php';


?>

<?php

   $librarianID = $_GET['id'];
   $librarianname = $_GET['name'];
   $email = $_GET['email'];
   $mobile = $_GET['mobile'];
   $psw1 = $_GET['psd1'];
   

?>




<html>
	<head>
	<title>Sagacious Library</title>
	<link rel="shortcut icon" href="images/1111.png" />
		<link rel="stylesheet" href="css/Header.css">
		<link rel="stylesheet" href="css/footer.css">
		<link rel="stylesheet" href="css/lfooter.css">
		<link rel="stylesheet" href="css/verticle_nav.css">
		<link rel="stylesheet" href="css/content.css">
	</head>

	<body style="background-color:#fff5ee;">
	
	
	
	
	<!--Header-->
	<nav>
	 <div class="btna ">
            <a href="logout.php"><button class="btn" name="button1"><b>Logout</b></button></a>
        </div>
       
        
		<a class="login" href=""><img id="logo" src="images/lg.jpg" alt="logo"></a>

       <ul class="navigation">
           <li><b><a id="nav1" href="../pasindu/Home1.html">Home</a></b></li>
          <li><b><a id="nav1" href="../sonali/collection.html"> Collection</a></b></li>
          <li><b><a id="nav1" href="../navinga/aboutus.php">About Us</a></b></li>
          <li><b><a id="nav1" href="../malith/search.php">search </a></b></li>
        </ul>
    </nav>
	
	
	<!--background image-->
	<img class="contentbg" src="images/bk2.jfif" alt="contentbg">
	
	
	
	
	<!--verticle Navigation Bar-->
	<div class="side" style = "margin-top: -6px;">
		<ul class="side">
			
			<li><a class="side" href="Add_Staff.php">Add clerk</a></li>
			<li><a class="side" href="Add_assistant.php">Add assistant</a></li>
			<li><a class="side" href="manageclerk.php" >Manage clerk</a></li>
			<li><a class="side" href="manageassistant.php" >Manage assistant</a></li>
			<li><a class="side" href="issuebook.php" >Issue Books</a></li>
			
		</ul>
	</div>
<div class="content" style = "left : 250px">	
<div class ="itemdata">
<div class="container" style = "background-color: rgba(0,0,0,0.3);">
<div style = "position:relative;top:5px;color:#34282C;font-size:30px;"><center><b>Librarian Profile Update</b></center></div>	
 <form action="editlibrarianextra.php" method = "GET" name = "form2">
 <table border = "0" width ="25%">
	 <tr>
		<td>Librarian Id</td>
		<td><input type="text" value = "<?php echo " $librarianID"?>"name="field1" readonly /></td>
	 </tr>
	  <tr>
		<td>Librarian Name</td>
		<td><input type="text" value = "<?php echo "$librarianname"?>" name="field2" /></td>
	 </tr>
	 <tr>
		<td>Email</td>
		<td><input type="text" value = "<?php echo "$email"?>" name="field3" /></td>
	 </tr>
	 <tr>
		<td>Mobile</td>
		<td><input type="text" value = "<?php echo "$mobile"?>" name="field4" /></td>
	 </tr>
	 <tr>
		<td>Password</td>
		<td><input type="text" value = "<?php echo "$psw1"?>" name="field5" /></td>
	 </tr>
	
	 
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
	<center><img id="logo" src="images/lg.jpg" alt="logo"></center>
	
	<div class="row">
	
	<div class = "col">
	<h3>Contact us</h3>
	<ul class = "footerlinks">
	       <li><b><a id="nav1" href="../pasindu/Home1.html">Home</a></b></li>
          <li><b><a id="nav1" href="../sonali/collection.html"> Collection</a></b></li>
          <li><b><a id="nav1" href="../navinga/aboutus.php">About Us</a></b></li>
          <li><b><a id="nav1" href="../malith/search.php">search </a></b></li>
	</ul>
	</div>
	
<div class = "col">
	<h3>Useful links</h3>
	 <ul class = "footerlinks">
		<li><a href ="http://www.natlib.lk/">National Library of Sri Lanka</a></li>
		<li><a href ="https://librarycampaign.com/publicity-tools/?gclid=CjwKCAjwzOqKBhAWEiwArQGwaDYJUVoJnCd4b4e8HvjcM3l2-olA5iRQV5Iz8IvAJtZitaMPBkFoVhoCpiQQAvD_BwE">The Librari Campaign</a></li>
		<li><a href ="https://librarycampaign.com/publicity-tools/?gclid=CjwKCAjwzOqKBhAWEiwArQGwaDYJUVoJnCd4b4e8HvjcM3l2-olA5iRQV5Iz8IvAJtZitaMPBkFoVhoCpiQQAvD_BwE">Room to Read</a></li>
		<li><a href ="https://librarycampaign.com/publicity-tools/?gclid=CjwKCAjwzOqKBhAWEiwArQGwaDYJUVoJnCd4b4e8HvjcM3l2-olA5iRQV5Iz8IvAJtZitaMPBkFoVhoCpiQQAvD_BwE">Pasific Atrocities Education</a></li>
		<li><a href ="https://asiafoundation.org/?gclid=CjwKCAjwzOqKBhAWEiwArQGwaHJ_6jE3ZXrnLQXgjWy1OyuJKMNo5dWUd0DhZWDYbKUPOUNFkB1mnBoC2fgQAvD_BwE">The Asia Foundation</a></li>
       </ul>
</div>
	
	<div class = "col">
	<h3>Contact us</h3>
	<ul class = "footerlinks">
	<li>Email :sagaciouslibrary@gmail.com</li>
	<li>Phone : +94012345656</li>
	<li></li>
	</ul>
	</div>
	
	<div class = "col">
	<h3>Connect us</h3>
	<div class = "row">
	<ul>
	<!-- Add icon library -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

		<!-- Add font awesome icons -->
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