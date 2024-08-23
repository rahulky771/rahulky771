
<?php

include "connection.php";


$sql = "SELECT * FROM user where id='".$_GET['id']."' ";

//$result = mysqli_query($conn, $sql);

$result = $conn->query($sql);

$data=mysqli_fetch_assoc($result);


include "header.php";

?>



		<div class="container">
			  <h3> student Details</h3>
					<table class=   "table table-user-information">
					    <tbody>
					      <tr>
					        <td>Name</td>
					        <td><?= $data['first_name']." ".$data['last_name'] ?></td>
					      </tr>
					      <tr>
					        <td>Email</td>
					        <td><?= $data['email']?></td>
					      </tr>

					       <tr>
					        <td>Phone</td>
					        <td><?= $data['mobile']?></td>
					      </tr>
					   </tbody>
					  </table>  

					  <a href="database.php"><button type="button" class="btn btn-warning"><i class="fa fa-arrow"></i> Back</button></td></a>
		</div>
   
  </body>
</html>


