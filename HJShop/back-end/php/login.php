<?php
    //$id=$_POST['id'];
 	$url=$_SERVER['HTTP_HOST'];

	if($url=="localhost:8080"){
		$server = "localhost";         # MySQL/MariaDB 伺服器
		$dbuser = "root";       # 使用者帳號
		$dbpassword = ""; # 使用者密碼
		$dbname = "hjshop";    # 資料庫名稱
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

	$sqltran = mysqli_query($con, "UPDATE test SET ans0='我連到了123456987' WHERE id=1")or die(mysqli_error($con));

	
 	mysqli_close($con);
