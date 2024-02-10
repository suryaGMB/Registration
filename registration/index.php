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
                    <button class="btn btn-success"> <a href="add.php" class="text-light"> Add New </a> </button>
                        <table class="table">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Date of birth</th>
                            <th scope="col">Email Address</th>
                            <th scope="col">Department</th>
                            <th scope="col">Phone Number</th>
                            <th scope="col">Gender(male/female)</th>
                            </tr>
                        </thead>

                        <tbody>
                             <?php
                              $connection = mysqli_connect("localhost","root","");
                              $db = mysqli_select_db($connection,"registration");
                              $sql="select * from registration";
                              $run= mysqli_query($connection,$sql);
                              $id =1;
                              while($row = mysqli_fetch_array($run))
                              {
                                $uid=$row['id'];
                                $name =$row['name'];
                                $Dateofbirth =$row['Dateofbirth'];
                                $email=$row['email'];
                                $Department=$row['Department'];
                                $phonenumber=$row['phonenumber'];
                                $gender=$row['gender'];
                              

                             ?>
                             <tr>
                                    <td><?php echo $id?></td>
                                    <td><?php echo $name ?></td>
                                    <td><?php echo $Dateofbirth ?></td>
                                    <td><?php echo $email ?></td>
                                    <td><?php echo $Department ?></td>
                                    <td><?php echo $phonenumber ?></td>
                                    <td><?php echo $gender ?></td>
                                    <td> <button class="btn btn-success"> <a href='edit.php?edit=<?php echo $uid ?>' class="text-light"> Edit </a> </button> </td>
                                    <td> <button class="btn btn-danger"><a href='delete.php?del=<?php echo $uid ?>' class="text-light"> Delete </a> </button> </td>
                                    

                            </tr>
                            <?php $id++;} ?>
                            
                        </tbody>
                        </table>
                    </div>
                    </div>


    </div>
    
</body>
</html>