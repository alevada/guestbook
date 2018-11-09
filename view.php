<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1>
    	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    	<!-- Bootstrap CSS -->
    	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	</head>

<body>
<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Message</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>



<!--$host = "localhost";
$username = "ale";
$password = "ale";
$db_name = "guestbook";
$tbl_name = "gbook";

$con=mysqli_connect($host, $username, $password, $db_name)or die("cannot connect server");
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$sql = "INSERT INTO $tbl_name (name, email, message) VALUES ('$name', '$email', '$message')";
$result=mysqli_query($con, $sql);
-->

<?php 
// including database connection
require_once("connection.php");
?>

<table width="100%">
<tr>
<td><a href="post.php">Post</a></td>
</tr>
<?php for($iRow=0;$iRow<$intCnt;$iRow++) { ?>
<tr>
<td>
<table width="100%">
<tr>
<td><?php echo $data[$iRow]["Name"];?></td>
</tr>
<tr>
<td><?php echo $data[$iRow]["Email"];?></td>
</tr>
<tr>
<td><?php echo $data[$iRow]["Url"];?></td>
</tr>
<tr>
<td><?php echo $data[$iRow]["Comment"];?></td>
</tr>
<tr>
<td colspan="2" height="20"><hr size="1" /></td>
</tr>
</table>
</tr>
</table>

</body>
</html>