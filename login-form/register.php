<?php
    //include('connection.php');
    $con = mysqli_connect('localhost','root','','libri') or die ("Nuk eshte lidhur me databaze");

    $name = $_GET['emri'];
    $surname = $_GET['mbiemri'];
    $city = $_GET['qyteti'];
    $password = $_GET['fjalekalimi'];
    $email = $_GET['email'];
    $username = $_GET['pseudonimi'];

    $query = mysqli_query($con,"SELECT email FROM perdoruesi WHERE email='$email' AND pseudonimi='$username'") or die("ERROR");

    if(mysqli_num_rows($query) != 0 ){
        echo "<script type='text/javascript'>
            alert('Kujdes, pseudonimi ose e-mail i till&euml; ekziston');
            location.href='index.php';
        </script>";
    }
    else{
        mysqli_query($con, "INSERT into perdoruesi(emri,mbiemri,pseudonimi,email,fjalekalimi,qyteti) VALUES('$name','$surname','$username','$email','$password','$city')");
        header("Location: (../index.php)");
    }
    mysqli_close($con);
//test
?>
