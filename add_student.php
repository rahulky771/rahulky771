

<?php
include "header.php";
include "connection.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {

	if($_POST["name"]==''&& $_POST["email"]==''&&$_POST["mobile"]==''){
		header("Location: database.php");
	}
	
		$fname = $_POST["fname"];
		$lname = $_POST["lname"];
		$email = $_POST["email"];
		$mobile=$_POST["mobile"];

		

		 $sql = "INSERT INTO user (first_name, last_name, email,mobile) VALUES ('".$fname."','".$lname."', '".$email."',  '".$mobile."')";

		if ($conn->query($sql) === TRUE) {
		    echo "New record created successfully";
		    header("Location: database.php");

		} else {
			echo "internal server error";
		}

}

?>

<div class="container">
  <h2>Add student</h2>
  <form action="#" method="post">
  	 <div class="form-group">
      <label for="name">First Name:</label>
      <input type="text" class="form-control" id="fname" placeholder="Enter name" name="fname">
    </div>
    <div class="form-group">
      <label for="name">Last Name:</label>
      <input type="text" class="form-control" id="lname" placeholder="Enter name" name="lname">
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <div class="form-group">
      <label for="mobile">mobile:</label>
      <input type="mobile" class="form-control" id="mobile" placeholder="Enter mobile" name="mobile">
    </div>
    
   
    <button type="submit" class="btn btn-default">Submit</button>
     <a href="database.php"><button type="button" class="btn btn-warning"><i class="fa fa-arrow"></i> Back</button></td></a>
  </form>


</div>

</body>
</html>
