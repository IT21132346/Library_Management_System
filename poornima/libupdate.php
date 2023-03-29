<?php include_once 'config.php'; ?>


<html>
	<head>
	<title>Sagacious Library</title>
	<link rel="shortcut icon" href="images/1111.png" />
		<link rel="stylesheet" href="css/Header.css">
		<link rel="stylesheet" href="css/verticle_nav.css">
		<link rel="stylesheet" href="css/content.css">
		<link rel="stylesheet" href="css/footer.css">
		<link rel="stylesheet" href="css/lfooter.css">
		<link rel="stylesheet" href="css/manage.css">
		
	</head>


	<body style=" background-image:url(images/lgpic3.jpg); background-repeat: no-repeat;background-size: cover;background-attachment: fixed;">

	<!--Header-->
	<nav>
	 <div class="btna ">
            <a href="logout.php"><button class="btn" name="button1"><b>Logout</b></button></a>
        </div>
        
        
		<a class="login" href=""><img id="logo" src="images/1111.png" alt="logo"></a>

        <ul class="navigation">
          <li><b><a id="nav1" href="../pasindu/Home1.html">Home</a></b></li>
          <li><b><a id="nav1" href="../sonali/collection.html"> Collection</a></b></li>
          <li><b><a id="nav1" href="../navinga/aboutus.php">About Us</a></b></li>
          <li><b><a id="nav1" href="../malith/search.php">search </a></b></li>
        </ul>
    </nav>
	
	

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
	
<table style = "margin-top : 200px;background-color:white;">

<tr>
	<th class = "col2" style = "background-color : goldenrod">librarian ID</th>
	<th class = "col2" style = "background-color : goldenrod">librarian Name</th>
	<th class = "col2" style = "background-color : goldenrod">Email</th>
	<th class = "col2" style = "background-color : goldenrod">Mobile</th>
	<th class = "col2" style = "background-color : goldenrod">password</th>
	<th class = "col2" style = "background-color : goldenrod">Edit</th>
</tr>



<?php

$librarianID= $_POST ['librarianID'];

$sql = "SELECT * FROM librarian WHERE librarianID='$librarianID'";

$result = $conn->query($sql);

if($result->num_rows>0)
{
	while($row=$result->fetch_assoc())
	{
			echo "<tr><td>".$row["librarianID"]."</td><td>".$row["librarianname"]."</td><td>".$row["email"]."</td><td>".$row["mobile"]."</td><td>".$row["password"]."</td></td>";
			
			
			echo "<td><a href='editlibrarianprofile.php?id=$row[librarianID]&name=$row[librarianname]&email=$row[email]&mobile=$row[mobile]&psd1=$row[password]'><input type='submit' value='Edit'/></a></td>";
			
			
			
			
		
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
	
	
	</BR></BR></BR></BR></BR></BR></BR></BR></BR></BR></BR></BR></BR></BR></BR></BR></BR></BR></BR></BR></BR></BR></BR></BR>
	
	<!--footer-->
	<footer class= "s-footer">
	<div>
	<center><img id="logo" src="images/1111.png" alt="logo"></center>
	
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