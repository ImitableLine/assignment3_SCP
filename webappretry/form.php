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
  <?php include "app/connection.php" ?>
      <h1>SCP Database</h1>
      
      <h2>User the form to enter a new SCP entry</h2>


      <form class="form-group" method="post" action="app/connection.php">
      <form class="form-group" method="POST" action="app/connection.php">
      
      <label>SCP NAME</label>
      <br>
      <input type="text" class="form-control" name="pg" placeholder="Page Number" required>
      <br><br>
      <label>Heading One</label>
      <br>
      <input type="text" class="form-control" name="h1" placeholder="Heading One" required>
      <br><br>
      <label>Paragraph One</label>
      <textarea class="form-control" name="p1" rows="5" required></textarea>
      <br><br>
      <label>Image One</label>
      <br>
      <input type="text" class="form-control" name="img1" placeholder="Image One">
      <br><br>

      <hr width="75%">
      <label>Heading Two</label>
      <br>
      <input type="text" class="form-control" name="h2" placeholder="Heading Two">
      <br><br>
      <label>Paragraph Two</label>
      <textarea class="form-control" name="p2" rows="5" ></textarea>
      <br><br>
      <label>Image Two</label>
      <br>
      <input type="text" class="form-control" name="img2" placeholder="Image Two">
      <br><br>
      <hr width="75%">

      <hr width="75%">
      <label>Heading Three</label>
      <br>
      <input type="text" class="form-control" name="h3" placeholder="Heading Three">
      <br><br>
      <label>Paragraph Three</label>
      <textarea class="form-control" name="p3" rows="5" ></textarea>
      <br><br>
      <label>Image Three</label>
      <br>
      <input type="text" class="form-control" name="img3" placeholder="Image Three">
      <br><br>
      <hr width="75%">
      <input type="submit" class="btn btn-dark" name="submit" value="Submit SCP Entry">


      </form>
    

   








    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>