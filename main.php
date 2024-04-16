<?php
	session_start();
	if (!isset($_SESSION['loggedin']) || !$_SESSION['loggedin']) {
		header('Location: login.html');
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Main</title>
		<meta charset="UTF-8" />
		<style>
  * {
  font-family: Quicksand;
  font-size: 16px;
  color: #333;
}
body{
	background-image: url(login2.jpeg);
	background-size: cover;
	background-repeat: no-repeat;
}
body {
  margin: 0;
  height: 100vh;
  padding: 0;
  border: 0;
  background: linear-gradient(to bottom right,  #2E3234, );
}

.form {
  background-color: #fff;
  height: 270px;
  width: 497px;
  border-radius: 20px;
  margin: 20px auto 50px auto;
  display: block;
  border: solid 1px #289df6;
  
  box-shadow: 0 0 1px 0 #ddd;
}

.form:hover {
  box-shadow: 0 0 100px 0 #ccc;
  transition: .4s;
  transform: scale(1.08);
}







#submit {
  border: none;
  border-radius: 10px;
  height: 40px;
  width: 140px;
  background-color: #f52a50;
  color: #fff;
  margin: auto;
  display: block;
  outline: none;
  cursor: pointer;
}

#submit:hover{
  background-color: #2E3234;
}

.text {
  display: inline-block;
  margin: 5px 20px 5px 8px;;
}










h1 {
  font-size: 30px;
  font-weight: 300;
  text-align: center;
  color: #f52a50;
  padding-top: 15px;
  display: block;
}

h2 {
  font-size: 22px;
  font-weight: 300;
  text-align: center;
}

h3 {
  font-size: 10px;
  font-weight: 1000;
  text-align: locale_get_default;

}


 </style>
	</head>
	
	<body>
		
	<h1>Welcome Dr.<?=$_SESSION['d_name']?></h1>
	<h2>Select one of the below options:</h2> <br />
	<div  class ="form" id="form">
	<label id="form"><a href="view.php"><img src="view.png" /></a><a href="register2.php"><img src="register.png" /></a>
	<h3><lable   class="text ">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; View All Patients&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		   ADD New Patients </h3>




</div>
	<br />
	<form action="logout.php" >

   <a href="login.html">;
	<button type="button" id="submit">LogOut</button>
</From>
	</body>
</html>