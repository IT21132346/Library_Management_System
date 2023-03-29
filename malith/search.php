
<!DOCTYPE html>
    <html>
	<head>
	<title>Sagacious Library</title>
		<link rel="stylesheet" href="styles/Header.css">
		<link rel="stylesheet" href="styles/footer.css">
		<link rel="stylesheet" href="styles/search.css">
	</head>

	<body style="background-color:#fff5ee;">
		
	
	<!------------------------------------------Header---------------------------------------------------------------------->
	
	<nav>
        <div class="btna ">        
			<a href="register1.php"><button class="btn" name="button1"><b>Register</b></button></a>
            <a href="../sonali/loginselector1.html"><button class="btn" name="button1"><b>Login</b></button></a>
        </div>
        
		<a class="login" href=""><img id="logo" src="images/lg.jpg" alt="logo"></a>

        <ul class="navigation">
          <li><b><a id="nav1" href="../pasindu/Home1.html">Home</a></b></li>
          <li><b><a id="nav1" href="../sonali/collection.html">Collection</a></b></li>
          
		  <li><b><a id="nav1" href="../navinga/aboutus.php">About Us</a></b></li>
		  <li><b><a id="nav1" href="search.php">Search </a></b></li>
        </ul>
    </nav>
	
	<!------------------------background image------------------------------------------------------------------------------->
	
	<img class="searchbg" src="images/searchbg.jpg" alt="searchbg">
	
	<!---------------------------------------------------------------search book ------------------------------------------->
	
	
	
	<div class="content" style="height : 250px; width: 500px;margin-left :500px;">
    <div style="position:relative;top:60px; font-size:20px;"><h2><center><b> Search Book Details</b></center></h2></div>
    <div class="container">	


    <form action="" method="POST"> 

    <center>
    <br><br><br>
    
	<label class = "category" style = "margin-left :-50px;">Book ID  :</label>
	<input type = "text" name = "bookID" class="btn" placeholder = "Book ID">
	<br>
	<label class = "category"  style = "margin-left :-50px;">Category  :</label>
    
		  <select name="category" id="category" class="btn">
		  <option value="Novel">Novel</option>
		  <option value="Science">Science</option>
		  <option value="Historical">Historical</option>
		  <option value="Motivational">Motivational</option>
		  <option value="literature">Short Story</option>
          </select>
    <br><br><br>
    <input type = "submit" name = "search" class="btn" value = "Search">
    </center>
    </form>
     </div>
     </div>
	 
     <form action="" method="POST">
      	
     <table class="tbl" border="8px" style = "margin-top:500px;">
     <tr style="background-color : #800000">
	 <th name="bookID" style = "background-color : goldenrod">Book ID</th>
	 <th name="bookname" style = "background-color : goldenrod">Book Name</th>
	 <th name="ISBN" style = "background-color : goldenrod">ISBN</th>
	 <th name="category" style = "background-color : goldenrod">Category</th>
	 <th name="author" style = "background-color : goldenrod">Author</th>
     </tr><br>


   <?php
		
	  $servername="localhost";
	  $username="root";
	  $password="";
	  $dbname="lms";


      // Create connectionS
      $conn = new mysqli($servername, $username, $password,$dbname);

      // Check connection
      if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);}


     //search button	
	  if(isset($_POST['search']))
	 {
		$bookID = $_POST['bookID'];
		
		$query = "SELECT * FROM book where bookID = '$bookID'";
		$query_run = mysqli_query($conn,$query);
		$result = $conn->query($query);
		
		while($row=$result->fetch_assoc())
		{
				echo"<tr><td>".$row['bookID']."</td>";
				echo"<td>".$row['bookname']."</td>";
				echo"<td>".$row['ISBNnumber']."</td>";
				echo"<td>".$row['category']."</td>";
				echo"<td>".$row['author']."</td></tr>";
	
		}
	 } 
	

	
    ?>
	</table>


    </form>
                      
	

	<!----------------------------------------------footer section---------------------------------------------------------->
	
	<footer class= "s-footer">
	<div>
	<center><img id="logo" src="images/lg.jpg" alt="logo"></center>
	
	<div class="row">
	
	<div class = "col">
	<h3>Contact us</h3>
	<ul class = "footerlinks">
	       <li><b><a id="nav1" href="../pasindu/Home1.html">Home</a></b></li>
           <li><b><a id="nav1" href="../sonali/collection.html">Collection</a></b></li>
          
		  <li><b><a id="nav1" href="../navinga/aboutus.php">About Us</a></b></li>
		  <li><b><a id="nav1" href="search.php">Search </a></b></li>
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
	