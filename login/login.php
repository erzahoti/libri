<?php
    include 'connection.php'; //lidhja me databazen behet ne kete menyre

    $email = $_GET['email']; //marrja e te dhenave nga forma
    $password = $_GET['fjalekalimi'];

    if(!empty($_GET)){

        mysqli_real_escape_string($email);
        mysqli_real_escape_string($password);

        $sql = "SELECT id FROM perdoruesi WHERE email = '$email' and fjalekalimi = '$password'";

        $result = mysqli_query($con,$sql);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $active = $row['active'];

        $counter = mysqli_num_rows($result);

        if($counter == 1){
            header("location: ../index.php");
        }
        else{
            $error = "Keni sh&euml;nuar emrin ose fjal&euml;kalimin gabim";
            echo $error;
        }

    }
?>
