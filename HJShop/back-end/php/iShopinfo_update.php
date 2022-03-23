<?php
 	$id=$_POST['id'];
 	$contacts=$_POST['con'];

 	//$NewString = "Welcome/to/Wibibi.";
	//$NewString = split ('[/.-]', $NewString);
	
	
 	$contact=explode('^',$contacts);
 	$tmpName=$contact[0];
 	$tmpInfo=$contact[1];
 	$tmpType=$contact[2];
 	$tmpCotact=$contact[3];
 	$tmpEmail=$contact[4];

 	$url=$_SERVER['HTTP_HOST'];

	if($url=="localhost:8080"){
		$server = "localhost";         # MySQL/MariaDB 伺服器
		$dbuser = "root";       # 使用者帳號
		$dbpassword = ""; # 使用者密碼
		$dbname = "shopsys";    # 資料庫名稱
		$con = new mysqli($server, $dbuser, $dbpassword, $dbname);

	}else{
		$con = mysqli_connect("35.194.138.227", "hjshopmall", "50808423", "hjshop");  //開啟MySQL資料庫
	}
 	// Check connection
	if (mysqli_connect_errno()) {
  		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}else{
		//echo "susccs!";
	}
	
	
 	$sqltran = mysqli_query($con, "UPDATE shopinfo SET shopname='$tmpName',shopinfo='$tmpInfo',typeinfo='$tmpType',cotact='$tmpCotact',email='$tmpEmail' WHERE id=$id")or die(mysqli_error($con));
 
 	$rowList = mysqli_fetch_array($sqltran);

	echo json_encode($string1);
	
 	mysqli_close($con);
