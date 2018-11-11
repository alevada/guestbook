<?php 
  require_once("php/functions.php");

  $all_entries = getAllEntries();
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
    <meta name="viewport" content="width=device-width", initial-scale=1>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	</head>
  <body>
    <div class="container">
      <div class="panel panel-default">
        <div class="panel-heading">
          View entries
          <a class="btn btn-primary c pull-right mag_bot" href="<?= $_SERVER['REQUEST_SCHEME'].'://'.$_SERVER['SERVER_NAME'].'/guestbook'; ?>" role="button">Home</a>
        </div>
        <div class="panel-body">
          <table class="table table-striped table-hover">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Message</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($all_entries as $iterator => $entry) { ?>
              <tr>
                <td><?php echo $iterator+1; ?></td>
                <td><?php echo $entry['name']; ?></td>
                <td><?php echo $entry['email']; ?></td>
                <td><?php echo $entry['message']; ?></td> 
              </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
      </div>
  
  </body>
</html>