<?php

include_once 'config.php';


?>
	
	
	
	
	
<?php

		
		$ISBN= $_POST["ISBN"];
		$bookname = $_POST["bookname"];
		$author = $_POST["author"];
		$category = $_POST["category"];

		$sql = "INSERT INTO request(ISBN ,bookname,author,category) VALUES ('$ISBN','$bookname','$author','$category')";
		
		if(mysqli_query($conn,$sql))
		{
		/*Reference stackoverflow*/
		echo "<script>alert('Record add sucessfully');     
	    window.setTimeout(function(){
		 
		window.location.href='manager.php';
	    },1000);
	    </script>";
	    }
		  
		
		else
		{
			echo "<script>alert('Error : Records are not added')</script>";
		}
		 
        
	    mysqli_close($conn);
    

?>