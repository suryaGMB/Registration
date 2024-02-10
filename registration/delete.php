<?php

$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection,"registration");
$delete=$_GET['del'];

$sql="delete from registration where id='$delete'";

if(mysqli_query($connection,$sql))
         {
            echo'<script>location.replace("index.php")</script>';

            

         }
         else
         {
         echo " error" .$connection->error;
         }

?>
