<?php 
  require_once("php/functions.php");

  $all_entries = getAllEntries();
?>


<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1>
    	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
        <?php foreach ($all_entries as $iterator => $entry) { ?>
          <tr>
            <td><?php echo $iterator; ?></td>
            <td><?php echo $entry['name']; ?></td>
            <td><?php echo $entry['email']; ?></td>
            <td><?php echo $entry['message']; ?></td> 
           </tr>
         <?php } ?>
      </tbody>
    </table>
  </body>
</html>