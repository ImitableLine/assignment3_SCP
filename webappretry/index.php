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

    <div class="row">

      <div class="col">

        <ul class="nav navbar-dark bg-dark">

            <?php foreach($result as $page): ?>
                <li>
                    <a href="index.php?page='<?php echo $page['pg'] ?>'" class="nav-link"><?php echo $page['pg'] ?></a>
                </li>
            <?php endforeach; ?>   
        <li>
            <a href="form.php" class="nav-link">Enter A New SCP Entry</a>
        </li>

        </ul>

        </div>

    </div>

 <!-- seperate comment-->


    <div class="row">

    
        <div class="col">
        <?php 
                 if (isset($_GET['page'])) 
                 {
                    $pg = trim($_GET['page'], "'");
                    $record = $connection->query("select * from pages where pg='$pg'");
                    $row = $record->fetch_assoc();
                    $h1 = $row ['h1'];
                    $h2 = $row ['h2'];
                    $h3 = $row ['h3'];

                    $p1 = $row ['p1'];
                    $p2 = $row ['p2'];
                    $p3 = $row ['p3'];


                    $img1 = $row ['img1'];
                    $img2 = $row ['img2'];
                    $img3 = $row ['img3'];
                    

                    $id = $row['id'];
                    $update = "update.php?update=" . $id;
                    $delete = "app/connection.php?delete=" . $id;
                    
                    
                    
                    
                    echo "

                    <h1>{$pg}</h1>
                    <h2>{$h1}</h2>
                    <p><img src='{$img1}'></p>
                    <p>{$p1}</p>
                    <h2>{$h2}</h2>
                    <p><img src='{$img2}'></p>
                    <p>{$p2}</p>
                    <h2>{$h3}</h2>
                    <p><img src='{$img3}'></p>
                    <p>{$p3}</p>
                    

                    ";
                    echo "
                    <p>
                    <a href='{$update}' class='btn btn-warning'>Update</a>
                    </p>

                    <p>
                    <a href='{$delete}' class='btn btn-danger'>Delete</a>
                    </p>


                    ";
                 }
                 else{
                    echo "
                    <h1>SCP APPLICATION</h1>
                    <p class='text-center'>This is a Database conating SCP entries with the ability to add them as the admin sees fit..</p>
                    <p class='text-center'>By clicking on the links above you will access the appropriate record from the database.</p>
                    
                    ";
                 }
                 
                 
                 
                 
                 
                 ?>
    

        </div>

    </div>
    

   




    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>