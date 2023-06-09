<?php  require_once "connect.php";

    

    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $bdate=$_POST['bdate'];
    $gender=$_POST['gender'];
    $email=$_POST['email'];
    $number=$_POST['number'];
    $subject=$_POST['subject'];
    
    // echo "$fname";
    // echo "<br>";
    // echo "$lname";
    // echo "<br>";
    // echo "$bdate";
    // echo "<br>";
    // echo "$gender";
    // echo "<br>";
    // echo "$email";
    // echo "<br>";
    // echo "$number";
    // echo "<br>";
    // echo "$subject";
    // echo "<br>";

    $query="INSERT INTO `registration` (`fname`,`lname`,`bdate`,`gender`,`email`,`number`,`subject`) VALUES ('$fname','$lname','$bdate','$gender','$email','$number','$subject')";    
    $result=mysqli_query($conn,$query);
        if($result){
            echo "DAta Saved";
        }else{
            echo "Error";
        }

?>