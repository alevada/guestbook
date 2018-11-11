<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width", initial-scale=1>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

      <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" class="titleind" href="styles.css">
  </head>
  <body>
    <div class="container">
      <h1>Guestbook</h1>
      <?php if (isset($_GET['success'])) { ?>      
      <div class="alert alert-success" role="alert">
        This is a success alert!
      </div>
      <?php } else if (isset($_GET['error'])) { ?>
      <div class="alert alert-danger" role="alert">
        This is a danger alert — check it out!
        <?php if (isset($_GET['error_message'])) { ?>
        <?= "<br/>".$_GET['error_message']; ?>
        <?php } ?>
      </div>
      <?php } ?>
      <a class="btn btn-primary a btn-lg btn-block" href="add.php" role="button">Add new entry</a>
      <a class="btn btn-primary b btn-lg btn-block" href="view.php" role="button">View entries</a>
    </div>
  </body>
</html>