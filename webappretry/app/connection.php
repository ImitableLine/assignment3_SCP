<?php 

$user = "a3003654_admin";
$pw = "Tsjotu888!";
$db = "a3003654_app";

$connection = new mysqli('localhost', $user, $pw, $db) or die(mysqli_error($connection));


$result = $connection->query("select * from pages") or die("Result Failed");


if(isset($_POST['submit']))
{
                    $pg = $_POST['pg'];

                    $h1 = $_POST ['h1'];
                    $h2 = $_POST ['h2'];
                    $h3 = $_POST ['h3'];

                    $p1 = $_POST ['p1'];
                    $p2 = $_POST ['p2'];
                    $p3 = $_POST ['p3'];


                    $img1 = $_POST ['img1'];
                    $img2 = $_POST ['img2'];
                    $img3 = $_POST ['img3'];

                    $sql = "insert into pages(pg, h1, h2, h3, p1, p2, p3, img1, img2, img3)
                    values('$pg', '$h1','$h2','$h3','$p1','$p2','$p3','$img1','$img2','$img3')";
                    if ($connection->query($sql) === TRUE) 
                    {
                        echo "<h1>Entry has been added without error.<h1>
                        <p><a href='../index.php'>Home Page</p>
                        ";
                    }
                    else
                    {
                        echo "<h1>Entry has been added with error.<h1>
                        
                        <p><a href='../index.php'>Home Page</p>
                        ";
                    }
}

if (isset($_GET['delete']))
{
    $id = $_GET['delete'];

    $del = "delete from pages where id=$id";

    if($connection->query($del) === TRUE)
    {
        echo "<P>SCP-Entry has been deleted. <a href='../index.php'>Return to SCP Registry</p>";
    }
    else
    {
        echo "<p>There was an error deleting this entry! Contact 05</p>";
        
    }
}
if(isset($_POST['update']))
{
                    $id = $_POST['id'];
                    $pg = $_POST['pg'];

                    $h1 = $_POST ['h1'];
                    $h2 = $_POST ['h2'];
                    $h3 = $_POST ['h3'];

                    $p1 = $_POST ['p1'];
                    $p2 = $_POST ['p2'];
                    $p3 = $_POST ['p3'];


                    $img1 = $_POST ['img1'];
                    $img2 = $_POST ['img2'];
                    $img3 = $_POST ['img3'];

                    $update = "
                    update pages set pg='$pg',h1='$h1',h2='$h2',h3='$h3',p1='$p1',p2='$p2',p3='$p3',img1='$img1',img2='$img2',img3='$img3'
                    where id='$id'
                    
                    
                    
                    
                    ";


                    if ($connection->query($update) === TRUE) 
                    {
                        echo "<h1>Entry has been updated without error.<h1>
                        <p><a href='../index.php'>Home Page</p>
                        ";
                    }
                    else
                    {
                        echo "<h1>Entry has been updated with error.<h1>
                        
                        <p><a href='../index.php'>Home Page</p>
                        ";
                    }

}

?>
