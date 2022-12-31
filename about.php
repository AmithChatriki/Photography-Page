<?php

    $con = mysqli_connect('localhost','root');

    if($con) {
        echo "connection successfull";
    }
    else {
        echo "connection failed";
    }

    mysqli_select_db($con, 'photography');

    $name = $_POST['name'];
    $email = $_POST['email'];
    $num = $_POST['number'];

    $query = "INSERT INTO users(name, email, number) values('$name', '$email', $num)";

    mysqli_query($con, $query);

    header('location:index.php#contact')

?>