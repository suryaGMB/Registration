<?php

$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection,"registration");
$edit=$_GET['edit'];

$sql="select * from registration where id ='$edit'";

$run=mysqli_query($connection,$sql);

while($row=mysqli_fetch_array($run))
{
    $uid=$row['id'];
    $name =$row['name'];
    $Dateofbirth =$row['Dateofbirth'];
    $email=$row['email'];
    $Department=$row['Department'];
    $phonenumber=$row['phonenumber'];
    $gender=$row['gender'];
    

}

?>
<?php
   $connection = mysqli_connect("localhost","root","");
   $db = mysqli_select_db($connection,"registration");
    
    if(isset($_POST['submit']))
    {
         $edit=$_GET['edit'];
         $name= $_POST['name'];
         $Dateofbirth= $_POST['Dateofbirth'];
         $email= $_POST['email'];
         $Department= $_POST['Department'];
         $phonenumber= $_POST['phonenumber'];
         $gender= $_POST['gender'];
         

         $sql="insert into registration(name,Dateofbirth,email,Department,Phonenumber,Gender)values('$name','$Dateofbirth','$email',' $Department',' $phonenumber','$gender')";
         if(mysqli_query($connection,$sql))
         {
            echo'<script>location.replace("index.php")</script>';

         }
         else
         {
         echo " error" .$connection->error;
         }

    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
                        <h1>Registration</h1> 
                    </div>
                    <div class="card-body">
                    <form action="add.php" method="post">
                        <div class="form-group" >
                            <label>Name :</label>
                            <input type="text" name="name" class="form-control"  placeholder="Enter Name" value="<?php echo $name ?>">   
                        </div>
                        </br>
                        <div class="form-group">
                            <label>Date of Birth :</label>
                            <input type="Date" name="Dateofbirth" class="form-control"  placeholder="Enter your Date Of Birth" value="<?php echo $Dateofbirth ?>">   
                        </div>
                        </br>
                        <div class="form-group">
                            <label>Email Address :</label>
                            <input type="text" name="email" class="form-control"  placeholder="Enter your eamil address" value="<?php echo $email ?>">   
                        </div>
                        </br>
                        <div class="form-group">
                           <label>Department :</label>
                            <select Department="Department" name=Department value="<?php echo $Department ?>">
                             <option value="AGRI">AGRI</option>
                             <option value="BIO MEDICAL">BIO MEDICAL</option>
                             <option value="CSE">CSE</option>
                             <option value="ECE">ECE</option>
                             <option value="EEE">EEE</option>
                            </select>

                        </div>
                        </br>
                        <div class="form-group">
                            <label>Phone Number :</label>
                            <input type="tel" name="phonenumber" class="form-control"  placeholder="Enter the phone number"  value="<?php echo $phonenumber ?>">   
                        </div>
                        </br>
                        <div class="form-group">
                            <label>Gender :</label>
                            <input type="radio" name="gender" value="Male">MALE
                            <input type="radio" name="gender" value="Female">FEMALE
                            
                        </div>
                        </br>

                        
                        <input type="submit" class="btn btn-primary" name="submit" value="Edit">
                        </form>
                   
                            
                        
                    </div>
                    </div>


    </div>
    
</body>
</html>