<?php
$id = $_POST['id'];
//$contacts = $_POST['con'];

//$NewString = "Welcome/to/Wibibi.";
//$NewString = split ('[/.-]', $NewString);


//$contact = explode('^', $contacts);
//$tmpName=$contact[0];
/*
 	item_name.value+"^"pic1.value+"^"+pic2.value+"^"+pic3.value+"^"+pic4.value+"^"+pic5.value+"^"+pic6.value+"^"+pic7.value+"^"+pic8.value+"^"+pic9.value+"^"+info.value+"^"+group_num.value+"^"+size.value+"^"+price.value+"^"+layup.value+"^"+least.value+"^"+kg.value+"^"+traffic_price1.value+"^"+traffic_price2.value+"^"+traffic_price3.value+"^"+traffic_price4.value+"^"+traffic_price5.value+"^"+traffic_price6.value+"^"+traffic_price7.value+"^"+traffic_price8.value+"^"+pay_yn1.value+"^"+pay_yn2.value+"^"+pay_yn3.value+"^"+self_num.value
 	*/


$url = $_SERVER['HTTP_HOST'];

if ($url == "localhost:8080") {
	$server = "localhost";         # MySQL/MariaDB 伺服器
	$dbuser = "root";       # 使用者帳號
	$dbpassword = ""; # 使用者密碼
	$dbname = "hjshop";    # 資料庫名稱
	$con = new mysqli($server, $dbuser, $dbpassword, $dbname);
} else {
	$con = mysqli_connect("35.194.138.227", "hjshopmall", "50808423", "hjshop");  //開啟MySQL資料庫
}
// Check connection
if (mysqli_connect_errno()) {
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
} else {
	//echo "susccs!";
}

/*
	$sqltran = mysqli_query($con, "UPDATE test SET a1='$contact[0]' WHERE id=1")or die(mysqli_error($con));
	$sqltran = mysqli_query($con, "UPDATE test SET a2='$contact[1]' WHERE id=1")or die(mysqli_error($con));
	$sqltran = mysqli_query($con, "UPDATE test SET a3='$contact[2]' WHERE id=1")or die(mysqli_error($con));
	$sqltran = mysqli_query($con, "UPDATE test SET a4='$contact[3]' WHERE id=1")or die(mysqli_error($con));
	$sqltran = mysqli_query($con, "UPDATE test SET a5='$contact[4]' WHERE id=1")or die(mysqli_error($con));
	$sqltran = mysqli_query($con, "UPDATE test SET a6='$contact[5]' WHERE id=1")or die(mysqli_error($con));
	$sqltran = mysqli_query($con, "UPDATE test SET a7='$contact[6]' WHERE id=1")or die(mysqli_error($con));
	$sqltran = mysqli_query($con, "UPDATE test SET a8='$contact[7]' WHERE id=1")or die(mysqli_error($con));
	$sqltran = mysqli_query($con, "UPDATE test SET a9='$contact[8]' WHERE id=1")or die(mysqli_error($con));
	$sqltran = mysqli_query($con, "UPDATE test SET a10='$contact[9]' WHERE id=1")or die(mysqli_error($con));
	$sqltran = mysqli_query($con, "UPDATE test SET a11='$contact[10]' WHERE id=1")or die(mysqli_error($con));
	$sqltran = mysqli_query($con, "UPDATE test SET a12='$contact[11]' WHERE id=1")or die(mysqli_error($con));
	$sqltran = mysqli_query($con, "UPDATE test SET a13='$contact[12]' WHERE id=1")or die(mysqli_error($con));
	$sqltran = mysqli_query($con, "UPDATE test SET a14='$contact[13]' WHERE id=1")or die(mysqli_error($con));
	$sqltran = mysqli_query($con, "UPDATE test SET a15='$contact[14]' WHERE id=1")or die(mysqli_error($con));
	$sqltran = mysqli_query($con, "UPDATE test SET a16='$contact[15]' WHERE id=1")or die(mysqli_error($con));
*/
$sql = "DELETE FROM iteminfo WHERE item_id=$id";

$sqltran = mysqli_query($con, $sql) or die(mysqli_error($con));

//$mysqli = new mysqli("localhost","my_user","my_password","my_db");

if ($con->connect_errno) {
	echo "Failed to connect to MySQL: " . $con->connect_error;
	exit();
} else {
	echo json_encode(["aaa" => "成功"]);
}
//echo json_encode(["aaa" => "成功"]);
//$rowList = mysqli_fetch_array($sqltran);

//echo json_encode($string1);

mysqli_close($con);
