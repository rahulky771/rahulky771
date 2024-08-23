<?php
 include "connection.php";
$sql = "SELECT * FROM user order by id desc";
//$result = mysqli_query($conn, $sql);
$result = $conn->query($sql);
$data=mysqli_fetch_all($result,MYSQLI_ASSOC);
include "header.php";
include "tub.php";

?>



<div class="container">
    <h3 class="text-center">All students Details</h3>
    <a href="add_student.php"><button type="button" class="btn btn-info pull-right"><i class="fa fa-plus"></i> ADD students</button></a>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Name</th>
        <th>email</th>
        <th>Phone</th>
         <th>Action</th>
      </tr>
    </thead>
    <tbody>
    	<?php
if ($result->num_rows > 0) {
  foreach ($data as  $value) {
    	?>
      <tr>
        <td><?php echo $value['first_name']." ".$value['last_name']; ?></td>
        <td><?=  $value['email']; ?></td>
        <td><?=  $value['mobile']; ?></td>
        <td><a href="delete_student.php?id=<?php echo $value['id'] ?>"><button type="button" class="btn btn-danger"><i class="fa fa-trash"></i> Delete</button></a>
        <a href="show_details.php?id=<?php echo $value['id'] ?>"><button type="button" class="btn btn-warning"><i class="fa fa-eye"></i> Show Details</button></td></a>
      </tr>
 <?php
 }
  } ?>    
    </tbody>
  </table>
</div>
<?php

$conn->close();

?>
</body>
</html>



