<?php 
$servername="localhost";
$username="root";
$password="";
$dbname="lms";

//create connection
$conn = new mysqli($servername,$username,$password,$dbname);

//Check connection
if($conn->connect_error){
	die("Connection faild:".$conn->connect_error);
}
//echo "Connected successfully";

?>
<html>
	<head>
	<title>Sagacious Library</title>
		<link rel="shortcut icon"  href="images/1111.png" />
		<link rel="stylesheet" href="styles/Header.css">
		<link rel="stylesheet" href="styles/footerUpdateuser.css">
		<link rel="stylesheet" href="styles/verticle_nav.css">
		<link rel="stylesheet" href="styles/contentUpdateuser.css">
	</head>

	<body style="background-color:#fff5ee;">
		
	
		<!--Header/Header.css-->
		<nav>
			<div class="btna ">
				<a href="logout.php"><button class="btn" name="button1"><b>Log Out</b></button></a>
			</div>
			
			<a class="login" href=""><img id="logo" src="images/lg.jpg" alt="logo"></a>

			<ul class="navigation">
			  <li><b><a id="nav1" href="Home1.html">Home</a></b></li>
			<li><b><a id="nav1" href="../sonali/collection.html"> Collection</a></b></li>
			<li><b><a id="nav1" href="../navinga/aboutus.php">About Us</a></b></li>
			<li><b><a id="nav1" href="../malith/search.php">search </a></b></li>
			</ul>
		</nav>
	
		<!--background image/content.css-->
		<img class="contentbg" src="images/contentbg2.jpg" alt="contentbg2">
		
		
		<!--verticle Navigation Bar/verticle_nav.css-->
		<div class="side">
			<ul class="side">
			
			<li><a class="side" href="lendbooks.php">Lend Books</a></li>
			<li><a class="side" href="returnedbooks.php" >Returned Books</a></li>
			<li><a class="side" href="../malith/payfine1.php" >Pay Fine</a></li>
			<li><a class="side" href="../malith/requestbook1.php" >Book Request</a></li>
			<li><a class="side" href="../malith/manager.php">Delete Book Request</a></li>
			</ul>
		</div>
		
		<div class="content">
			<b class="he">Update User</b>
			<table class="tbl" border="2px">
			
			<tr>
				<th class = "col2" style = "background-color : goldenrod">User ID</th>
				<th class = "col2" style = "background-color : goldenrod">User Name</th>
				<th class = "col2" style = "background-color : goldenrod">Email</th>
				<th class = "col2" style = "background-color : goldenrod">Mobile</th>
				<th class = "col2" style = "background-color : goldenrod">password</th>
				<th class = "col2" style = "background-color : goldenrod">Edit</th>
				<th class = "col2" style = "background-color : goldenrod">Delete</th>
			</tr>

			<?php

			@$sql = "SELECT * FROM user WHERE userID='$_GET[userID]'";

			@$result = $conn->query($sql);

			if($result->num_rows>0)
			{
				while($row=$result->fetch_assoc())
				{
					echo "<tr><td>".$row["userID"]."</td><td>".$row["username"]."</td><td>".$row["email"]."</td><td>".$row["mobile"]."</td><td>".$row["password"]."</td></td>";
					
					echo "<td><a href='Edituser.php?id=$row[userID]&name=$row[username]&email=$row[email]&mobile=$row[mobile]&psd1=$row[password]'><input type='submit' value='Edit'/></a></td>";
					
					echo "<td><a href='Deleteuser.php?id=$row[userID]&name=$row[username]&email=$row[email]&mobile=$row[mobile]&psd1=$row[password]'><input type='submit' value='Delete'/></a></td>";
				}
			}
			else
			{
				echo "0 result";


			}
			echo "</table>";
			$conn->close();
			?>
			
				
			</table>
		</div>
	
	
	<!--footer section-->
	<footer class= "s-footer">
	
	<center><img id="logo" src="images/lg.jpg" alt="logo"></center>
	
	<div class="row">
	
	<div class = "col">
	<h3>Contact us</h3>
	<ul class = "footerlinks">
	      <li><b><a id="nav1" href="../pasindu/Home1.html">Home</a></b></li>
          <li><b><a id="nav1" href="../sonali/collection.html"> Collection</a></b></li>
          <li><b><a id="nav1" href="aboutus.php">About Us</a></b></li>
          <li><b><a id="nav1" href="../malith/search.php">search </a></b></li>
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
	<li>Email :</li>
	<li>Phone : +94012345656</li>
	<li></li>
	</ul>
	</div>
	
	<div class = "col">
	<h3>Connect us</h3>
	<div class = "row">
	<ul>
             <!--w3school-->
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