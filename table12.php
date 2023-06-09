<?php

require_once "connect.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>

    <center>

        <table style=" width: 150pxpx;" class="table">
            <thead class="table table-primary">

                <tr>
                    <th scope="col">no</th>
                    <th scope="col">fname</th>
                    <th scope="col">lname</th>
                    <th scope="col">birhdate</th>
                    <th scope="col">gender</th>
                    <th scope="col">email</th>
                    <th scope="col">number</th>
                    <th scope="col">subject</th>

                </tr>

            </thead>

            <?php

            $query = " SELECT * FROM `registration` " or die("QUERY EEOR.....");
            $result = mysqli_query($conn, $query) or die("RESULT EEOR.....");

            if (mysqli_fetch_row($result) > 1) {

            ?>
                <tbody>

                <?php
                $sr_no=1;

                    while($row=mysqli_fetch_assoc($result)){

                ?>

                    <tr>

                    <!-- <th scope="row">1</th> -->
                    <td><?php echo $sr_no;  ?></td>
                    <td><?php echo $row['fname'];  ?></td>
                    <td><?php echo $row['lname'];  ?></td>
                    <td><?php echo $row['bdate'];  ?></td>
                    <td><?php echo $row['gender'];  ?></td>
                    <td><?php echo $row['email'];  ?></td>
                    <td><?php echo $row['number'];  ?></td>
                    <td><?php echo $row['subject'];  ?></td>

                    </tr>

                    <?php
                    $sr_no++;
                }
            }else{
                ?>
                    <tb>
                 
                        NO DATA FOUND
                 
                    </tb>

                <?php
            
                }

                ?>
                
            </tbody>

            

            


    </center>

</body>

</html>