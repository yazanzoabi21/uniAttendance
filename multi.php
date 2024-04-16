<?php
    session_start();
    require_once "connectiion.php";

    $role = "";
    if(isset($_POST["btnLogin"]))
        {
            $aid = $_POST["aid"];
            $apassword = $_POST["apassword"];
            
            $query = "SELECT * FROM tbluser WHERE id = '$aid' AND password = '$apassword'";
            $result = mysqli_query($conn, $query);

            if(mysqli_num_rows($result) > 0)
                {
                    while($row = mysqli_fetch_assoc($result))
                        {
                            if($row["role"] == "admin")
                                {
                                    $_SESSION['loggedin'] = $row["id"];
                                    header('Location: adminPage.php');
                                }
                            else
                                {
                                    $_SESSION['loggedin'] = $row["id"];
                                    header('Location: doctorPage.php');
                                }
                        }
                }
                else 
                {
                    header('Location: login.php');
                }
        }  
?>