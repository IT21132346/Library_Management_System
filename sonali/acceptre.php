<?php
	require_once('config.php');
	$query = "SELECT*FROM request";
	$query_run = mysqli_query($connection,$query);
	$result = $connection->query($query);
     ?>



<!DOCTYPE html>
<html>
 <head>
 <title>Sagacious Library</title>
<link rel="shortcut icon"  href="images/lg.jpg"/>
		<link rel="shortcut icon"  href="image/lg.jpg" />
		<link rel="stylesheet" href="css/Header.css">
        <link rel="stylesheet" href="css/lfooter.css">
		<link rel="stylesheet" href="css/footerreturn.css">
		<link rel="stylesheet" href="css/verticle_nav_sb.css">
		<link rel="stylesheet" href="css/content.css">
		<link rel="stylesheet" href="css/returnbook.css">
		

	</head>
	
	<body style="background-image:url(image/3.png); background-repeat: no-repeat;background-size:cover;background-attachment: fixed;">

	<!-------------------Header------------------->	
	<nav>
        <div class="btna ">

<a href="loginselector.html"><button class="btn" name="button1"><b>Logout</b></button></a>
</div>

        
		<a class="login" href=""><img id="logo" src="image/lg.jpg" alt="logo"></a>
		
        <ul>
           <li><b><a id="nav1" href="../pasindu/Home1.html">Home</a></b></li>
          <li><b><a id="nav1" href="collection.html"> Collection</a></b></li>
          <li><b><a id="nav1" href="../navinga/aboutus.php">About Us</a></b></li>
          <li><b><a id="nav1" href="../malith/search.html">search </a></b></li>
        </ul>
    </nav>
	
<!------------verticle Navigation Bar---------->
	<div class="side" class="navigation" style="position:absolute; top:173px; height:200px;">
		<ul class="side">
			<li><a class="side" href="../navinga/loginassistant.php" >Profile </a></li>
			<li><a class="side" href="addbooks.php">Add books</a></li>
			<li><a class="side" href="managebooks.php" >Manage books</a></li>
			<li><a class="side" href="returnbooks.php" >return books</a></li>
			<li><a class="side" href="showreturnedbooks.php" > show returned books</a></li>
			<li><a class="side" href="acceptre.php" > accept book requests</a></li>
			
		</ul>
	</div>
	<br><br><br><br>
	<h2><center><b style="font-size:48px; color:black">Requested Books</h2></center></b>
	
		<table style="position:relative;left:50px; top:-50px;">
<tr>
	<th class="a">ISBN</th>
	<th class="a">Book Name</th>
	<th class="a">Category</th>
	<th class="a" >author</th>
</tr><br>
        
<?php while($rows=mysqli_fetch_assoc($result))
	{
	?>
		
		<tr>
		<td><?php echo $rows['ISBN']; ?></td>;       
		<td><?php echo $rows['bookname']; ?></td>;
		<td><?php echo $rows['category']; ?></td>;
		<td><?php echo $rows['author']; ?></td>;
		</tr>
		
		 <?php
	}
		 ?>
		 </table>
		 
        
		
<div class="content" style="height : 250px;">
<div style="position:relative;top:60px; font-size:20px;"><h2><center><b>Accept book requests</b></center></h2></div>
<div class="container">
<form method="POST" action="acceptbook.php">

				<label class="ab" for="bid">ISBN : </label>
				<input class="cd" style="margin-left:100px" type="text" name = "ISBN"/> </br>

				<label class="ab" for="bname">Book name : </label>
				<input class="cd" style="margin-left:53px" type="text" name= "bookname"/> </br>


				<label class="ab" for="category">Category : </label>
				<input class="cd" style="margin-left:65px" type="text" name ="category"/> </br>

				
				<label class="ab" for="author">Author : </label>
				<input class="cd" style="margin-left:91px" type="text" name = "author"/></br>
				
			
                <div class="gh">
				<button class="btned" name="issue">Accept</button></a>
				</div>
			
</form>
</div>
</div>
		 
		 


</BR></BR></BR></BR></BR></BR></BR></BR></BR></BR></BR></BR></BR></BR></BR></BR></BR></BR></BR></BR></BR></BR></BR></BR></BR></BR></BR></BR>
	
	
	<!------------------footer section--------------------->
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