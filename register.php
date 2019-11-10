<?php
    if(isset($_POST['submit'])) {
        include("connection.php");

        $username = $_POST['username'];
        $email = $_POST['email'];
        $phonenum = $_POST['phonenum'];
       
       
    $query = "INSERT INTO user(username, email, phonenum)VALUES('$username', '$email', '$phonenum')";
    $insertData = mysqli_query($conn, $query);
    //echo $query;

    /*if(!mysqli_query($conn, $query)) {
        echo "data tak masuk ler....";
    }
    else {
        echo "data masuk hehe";
    }*/
    }
?>