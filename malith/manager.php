<?php

include_once 'config.php';


?>

<!DOCTYPE html>
<html>
	<head>
		<title>Sagacious Library</title>
		<link rel="stylesheet" href="styles/Header.css">
		<link rel="stylesheet" href="styles/footeruser.css">
		<link rel="stylesheet" href="styles/verticle_nav.css">
		<link rel="stylesheet" href="styles/content.css">
		<style>
			.error{
				color: red;
			}
		</style>
	</head>

	<body style="background-color:#fff5ee;">
		
	
	<!----------------------------------------Header--------------------------------------------->
	<nav>
        <div class="btna ">
            <a href="logout.php"><button class="btn" name="button1"><b>Logout</b></button></a>
        </div>
        
		<a class="login" href=""><img id="logo" src="images/lg.jpg" alt="logo"></a>

        <ul class="navigation">
		 <li><b><a id="nav1" href="../pasindu/Home1.html">Home</a></b></li>
          <li><b><a id="nav1" href="../sonali/collection.html">Collection</a></b></li>
          <li><b><a id="nav1" href="../navinga/aboutus.php">About Us</a></b></li>
		  <li><b><a id="nav1" href="search.php">Search </a></b></li>
        </ul>
    </nav>
	
	<!---------------------------------background image--------------------------------------------->
	<img class="contentbg" src="images/contentbg.jpg" alt="contentbg">
	
	
	<!-----------------------------verticle Navigation Bar------------------------------------------>
	<div class="side">
		<ul class="side">
		
			<li><a class="side" href="../pasindu/lendbooks.php" >Lend Books</a></li>
			<li><a class="side" href="../pasindu/returnedbooks.php" >Returned Books</a></li>
			<li><a class="side" href="payfine1.php" >Pay Fine</a></li>
			<li><a class="side" href="requestbook1.php" >Book Request</a></li>
			<li><a class="side" href="manager.php" >Delete Book Request</a></li>
		</ul>
	</div>
	
	
	
	<!--------------------------------------- delete  Request book Area ------------------------------------------------>
	
    <table border="8px"  style="left:450px;position:absolute;top:300px;">
    <tr>
   
	<th class = "col2" style = "background-color : goldenrod">ISBN</th>
	<th class = "col2" style = "background-color : goldenrod">Book Name</th>
	<th class = "col2" style = "background-color : goldenrod">Author</th>
	<th class = "col2" style = "background-color : goldenrod">Category</th>
	<th class = "col2" style = "background-color : goldenrod">Delete</th>


    </tr>



<?php


    $sql = "SELECT * FROM request";

    $result = $conn->query($sql);

    if($result->num_rows>0)
    {
	while($row=$result->fetch_assoc())
	{
			echo "<tr><td>".$row["ISBN"]."</td><td>".$row["bookname"]."</td><td>".$row["author"]."</td><td>".$row["category"]."</td>";
			
			
			
			
			
			
			echo "<td><a href='deleterequestbook.php?id=$row[ISBN]&name=$row[bookname]&author=$row[author]&category=$row[category]'><input type='submit' value='Delete'/></a></td></tr>";
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

	
	<!-----------------------------------------footer section--------------------------------------------------------->
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
          <li><b><a id="nav1" href="search.php">search </a></b></li>
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