<?php require('dbconfig.php');?>
<!DOCTYPE html>
<html>
<head>
	<title>WORKSHOP || Saadman</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
<?php
  $sql = "SELECT * from info";
  $result = $conn-> query($sql);
  ?>
<div class = "container">
<h2>ALL STUDENT Data</h2><br>
<a class = "btn btn-success" href = "ab.php">ADD</a>

<table class = "table">
<thead>
<tr>
<th>Name</th>
<th>Email</th>
<th>Department</th>
<th>Registration</th>
</tr>
</thead>
</tbody>

<?php
  if($result->num_rows>0){
  	while($row= $result-> fetch_assoc()){
  		echo '<tr class="danger">
			 <td>'.$row["name"].'</td>
			 <td>'.$row["email"].'</td>
			 <td>'.$row["dept"].'</td>
			 <td>'.$row["reg"].'</td>
			 </tr>';
  	}
  }else{
  	echo "0 results";
  }
  $conn-> close();
  ?>

  </tbody>
  </table>
  </div>
  </body>
  </html>


