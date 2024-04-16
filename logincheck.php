
    


<?php

	/*if(isset($_POST['aid']) && isset($_POST['apassword'])) {
		require('connection.php');
		extract($_POST); //$sid and $spasswd
		$aid = mysqli_real_escape_string($link, $aid);
	  	
		$query = "SELECT * FROM admin WHERE ID = $aid;";
		echo $query;
		
		$result = mysqli_query($link, $query);
		if (($result) && (mysqli_num_rows($result) == 1)){		
			$s_info = mysqli_fetch_assoc($result);
		
			if (($s_info['ID'] == $aid) && 
			    ($s_info['Password'] == $apassword)) {
				session_start();
				$_SESSION['loggedin'] = true;
				
				header('Location: adminPage.php');
			} else {
				header('Location: login.html');
			}
		} else {
			header('Location: login.html');
		}
		mysqli_close($link);
	} else {
		header('Location: login.html');
	}
?>




if(isset($_POST['aid']) && isset($_POST['apassword'])) { 
  
    require ('connectiion.php');
	extract($_POST); //$sid and $spasswd
	$aid = mysqli_real_escape_string($conn, $aid);

    $role = "";
    
           // $aid = $_POST["aid"];
            //$apassword = $_POST["apassword"];
            
            $query = "SELECT * FROM tbluser WHERE id = '$aid' ";
			echo $query;
            $result = mysqli_query($conn, $query);
					

				$result = mysqli_query($conn, $query);
				if (($result) && (mysqli_num_rows($result) == 1)){		
					$s_info = mysqli_fetch_assoc($result);
				
                            if($row["role"] == "Manager" && ($s_info['id'] == $did) && ($s_info['password'] == $apassword) ){
                                    $_SESSION['loggedin'] = $row["id"];
                                    header('Location: adminPage.php');
                                }
                            else
                                {
									session_start();
				                    $_SESSION['loggedin'] = true;
									$_SESSION['Instructor_name'] = $s_info['Name'];
				                    $_SESSION['id'] = $aid;
                                $_SESSION['loggedin'] = $row["id"];
                                    header('Location: doctorPage.php');
                                }
                        }
                
				else {
					header('Location: login.html');
				}
				mysqli_close($conn);}
                else 
                {
                    header('Location: login.php');
                }
<?php
  */  
  if(isset($_POST['aid']) && isset($_POST['apassword'])) { 
  session_start();
    require ('connectiion.php');
	extract($_POST); //$sid and $spasswd
	$aid = mysqli_real_escape_string($conn, $aid);

    $role = "";
    
           // $aid = $_POST["aid"];
          //  $apassword = $_POST["apassword"];
            
            $query = "SELECT * FROM tbluser WHERE id = '$aid' AND password = '$apassword'";
			
            $result = mysqli_query($conn, $query);
			if (($result) && (mysqli_num_rows($result) == 1)){		

           
                    while($row = mysqli_fetch_assoc($result))
                        {
                            if($row["role"] == "Manager")
                                {
                                    $_SESSION['loggedin'] = $row["id"];
                                    header('Location: adminPage.php');
                                }
                                else if($row["role"] == "IT")
                                {
                                    
                                    $_SESSION['loggedin'] = $row["id"];
                                    header('Location: itPage.php');
                                }
                            else
                                {				$_SESSION['id'] = $aid;

                                    $_SESSION['loggedin'] = $row["id"];
                                    header('Location: doctorPage.php');
                                }
                        }
                }
				else {
					header('Location: login.html');
				}
				mysqli_close($conn);}
                else 
                {
                    header('Location: login.html');
                }
         
?>
