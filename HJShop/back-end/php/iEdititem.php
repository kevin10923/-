<?php
$id = $_POST['id'];
$contacts = $_POST['con'];

//$NewString = "Welcome/to/Wibibi.";
//$NewString = split ('[/.-]', $NewString);


$contact = explode('^', $contacts);
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
	mysqli_query($con, "SET NAMES 'utf8'");
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

//$sqltran = mysqli_query($con, "INSERT INTO iteminfo (`item_name`) VALUES ('$contact[0]')")or die(mysqli_error($con));
//UPDATE `main` SET `id`=[value-1],`max`=[value-2],`online`=[value-3],`total`=[value-4],`myindex`=[value-5],`open_time`=[value-6],`loop_time`=[value-7] WHERE 1

$sqltran = mysqli_query($con, "UPDATE iteminfo  SET `pic1`='$contact[0]', `pic2`='$contact[1]', `pic3`='$contact[2]', `pic4`='$contact[3]', `pic5`='$contact[4]', `pic6`='$contact[5]', `pic7`='$contact[6]', `pic8`='$contact[7]', `pic9`='$contact[8]', `item_name`='$contact[9]', `price`='$contact[10]', `self_num`='$contact[11]',`size`='$contact[12]', `kg`='$contact[13]', `group_num`='$contact[14]', `least`='$contact[15]', `layup`='$contact[16]', `info`='$contact[17]', `traffic_price1`='$contact[18]', `traffic_price2`='$contact[19]', `traffic_price3`='$contact[20]', `traffic_price4`='$contact[21]', `traffic_price5`='$contact[22]', `traffic_price6`='$contact[23]', `traffic_price7`='$contact[24]', `traffic_price8`='$contact[25]', `pay_yn1`='$contact[26]', `pay_yn2`='$contact[27]', `pay_yn3`='$contact[28]', `pay_yn4`='$contact[29]' WHERE item_id=$id") or die(mysqli_error($con));

//舊的我沒刪
//$sqltran = mysqli_query($con, "INSERT INTO iteminfo (`item_name`, `pic1`, `pic2`, `pic3`, `pic4`, `pic5`, `pic6`, `pic7`, `pic8`, `pic9`, `info`, `group_num`,`coin`, `price`, `layup`, `least`, `kg`, `traffic_price1`, `traffic_price2`, `traffic_price3`, `traffic_price4`, `traffic_price5`, `traffic_price6`, `traffic_price7`, `traffic_price8`, `pay_yn1`, `pay_yn2`, `pay_yn3`, `self_num`) VALUES ('$contact[0]','$contact[1]','$contact[2]','$contact[3]','$contact[4]','$contact[5]','$contact[6]','$contact[7]','$contact[8]','$contact[9]','$contact[10]','$contact[11]','$contact[12]','$contact[13]','$contact[14]','$contact[15]','$contact[16]','$contact[17]','$contact[18]','$contact[19]','$contact[20]','$contact[21]','$contact[22]','$contact[23]','$contact[24]','$contact[25]','$contact[26]','$contact[27]','$contact[28]')")or die(mysqli_error($con));

$rowList = mysqli_fetch_array($sqltran);

echo json_encode($string1);

mysqli_close($con);
