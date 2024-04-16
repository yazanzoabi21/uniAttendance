<?php
    include("connectionnn.php");

    extract($_POST);
    $query = "INSERT INTO `contact_us`(`id`, `first_name`, `last_name`, `email`, `phone`, `message`, `file`) VALUES ('".$first_name."','".$last_name."',''".$email."'',''".$phone."'','".$message."')"
    $result = $mysqli->query($query);

    if(!$result) {
        echo "Something went wrong".$mysqli->err;
    }

    echo "Thank you for submitting your Message.";
    $mysqli->close();

    print_r($_POST);
?>