
<html>
	<head>
	<title>Sagacious Library</title>
	<link rel="shortcut icon" href="images/1111.png" />
		<link rel="stylesheet" href="css/Header.css">
		<link rel="stylesheet" href="css/footer.css">
		<link rel="stylesheet" href="css/lfooter.css">
		<link rel="stylesheet" href="css/verticle_nav.css">
		<link rel="stylesheet" href="css/content.css">
		<script type = "text/javascript" src = "js/showpassword1.js"></script><!--show password js-->
		
		<!--check password js-->
		<script>
		function checkpasswords(){
			if(document.getElementById("pswd1").value != document.getElementById("pswd2").value){
				alert("Passwords Does not match");
				return false;
			
			}else{
				
				return true;
			}
		}
		</script>
		
	</head>

<body style="background-color:#fff5ee;">
<div class= "mbkcantainer" style = "height : 600px;">
<?php require "config.php" ?>
		
	
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
	<img class="contentbg" src="images/contentbg.jpg" alt="contentbg" style = "background-repeat: no-repeat;background-size: cover;background-attachment: fixed;">
	
	
	<!--verticle Navigation Bar-->
	<div class="side" style = "margin-top: -10px;">
		<ul class="side">
			
			<li><a class="side" href="Add_Staff.php">Add clerk</a></li>
			<li><a class="side" href="Add_assistant.php">Add assistant</a></li>
			<li><a class="side" href="manageclerk.php" >Manage clerk</a></li>
			<li><a class="side" href="manageassistant.php" >Manage assistant</a></li>
			<li><a class="side" href="issuebook.php" >Issue Books</a></li>
			
		</ul>
	</div>
	
	
	<!--Add Clerk-->
	<div class="content">
	<div style = "position:relative;top:60px;color:#34282C;font-size:30px;"><center><b>Add Clerk </b></center></div>	
		<img src="images/user.png" alt="user.png">
		<div class="container">
			<form method="POST"  action="addaclerk.php">
					
				<label class="ab" for="uname">Name : </label>				
				<input class="cd" style="margin-left:78px" type="text" value="" id="cname" name="clerkname" required> </br>
				
				
				<label class="ab" for="email">Email : </label>				
				<input class="cd" style="margin-left:91px" type="email" placeholder="abc@gmail.com" pattern ="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}" value="" id="cemail" name="email" required> </br>
				
				
				<label class="ab" for="mobile">Mobile number : </label>				
				<input class="cd" style="margin-left:24px" type="text" value="" id="clkmob_number" name="mobile" placeholder= "o773869***" required> </br>
				
				<label class="ab" for="pw">Password : </label>
				<input class="cd" style="margin-left:24px" type="password" value="" id="pswd1" name="password" required> </br>
				<label class="ab" id="showpass">Show Password</label>
				<input class="cd"  type="checkbox" onclick="showpassword()" id="cbox"></br>
				
				
				<label class="ab" for="dob">Re-enter Password:</label>
	            <input class="cd" style="margin-left:24px"type="password" id="pswd2"  required> </br>
		
				
				<div class="gh">
				<input type="submit" value="submit" onmouseover="checkpasswords()">
				</div>
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