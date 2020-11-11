<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>SCP database</title>
  </head>
  <body class="container">
  <?php 
    include "app/connection.php"; 
    $id = $_GET['update'];
    $record = $connection->query("select * from pages where id=$id");
    $row = $record->fetch_assoc();
    
  
  
  ?>
      <h1>SCP Database</h1>
       
      <h2>User the form to update an SCP entry</h2>

      
      <form class="form-group" method="post" action="app/connection.php">
      <form class="form-group" method="POST" action="app/connection.php">
      <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
      
      <label>SCP NAME</label>
      <br>
      <input type="text" class="form-control" name="pg"  value="<?php echo $row['pg'] ?>">
      <br><br>
      <label>Heading One</label>
      <br>
      <input type="text" class="form-control" name="h1"  value="<?php echo $row['h1'] ?>">
      <br><br>
      <label>Paragraph One</label>
      <textarea class="form-control" name="p1" rows="5"  placeholder="<?php echo $row['p1']; ?>"></textarea>
      <br><br>
      <label>Image One</label>
      <br>
      <input type="text" class="form-control" name="img1" value="<?php echo $row['h1'] ?>">
      <br><br>

      <hr width="75%">
      <label>Heading Two</label>
      <br>
      <input type="text" class="form-control" name="h2" value="<?php echo $row['h1'] ?>">
      <br><br>
      <label>Paragraph Two</label>
      <textarea class="form-control" name="p2" rows="5" placeholder="<?php echo $row['p1']; ?>"></textarea>
      <br><br>
      <label>Image Two</label>
      <br>
      <input type="text" class="form-control" name="img2" value="<?php echo $row['h1'] ?>">
      <br><br>
      <hr width="75%">

      <hr width="75%">
      <label>Heading Three</label>
      <br>
      <input type="text" class="form-control" name="h3" value="<?php echo $row['h1'] ?>">
      <br><br>
      <label>Paragraph Three</label>
      <textarea class="form-control" name="p3" rows="5" placeholder="<?php echo $row['p1']; ?>"></textarea>
      <br><br>
      <label>Image Three</label>
      <br>
      <input type="text" class="form-control" name="img3" value="<?php echo $row['h1'] ?>">
      <br><br>
      <hr width="75%">
      <input type="submit" class="btn btn-warning" name="update" value="Update SCP Entry">


      </form>
    

   








    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>