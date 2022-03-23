<?php
$id = $_POST['id'];
$contacts = $_POST['con'];


$contact = explode('^', $contacts);


$url = $_SERVER['HTTP_HOST'];

if ($url == "localhost:8080") {
	$server = "localhost";  # MySQL/MariaDB 伺服器
	$dbuser = "root";       # 使用者帳號
	$dbpassword = "";       # 使用者密碼
	$dbname = "hjshop";     # 資料庫名稱
	$con = new mysqli($server, $dbuser, $dbpassword, $dbname);
} else {
	$con = mysqli_connect("35.194.138.227", "hjshopmall", "50808423", "hjshop");  //開啟MySQL資料庫
}
// Check connection
if (mysqli_connect_error()) {
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
} else {
	//echo "susccs!";
}


//取得該商戶最後一筆產品編號 並+1

$sqltran = mysqli_query($con, "SELECT MAX(item_id) FROM iteminfo WHERE Mer_id='$id' LIMIT 1") or die(mysqli_error($con));
$rowList = mysqli_fetch_array($sqltran);

$New_item_id = $rowList['MAX(item_id)'] + 1;

$sqltran = mysqli_query($con, "INSERT INTO iteminfo (`pic1`, `pic2`, `pic3`, `pic4`, `pic5`, `pic6`, `pic7`, `pic8`, `pic9`, `item_name` , `price`, `self_num` , `size`, `kg`, `group_num`, `least` ,  `layup` ,  `info` , `traffic_price1`, `traffic_price2`, `traffic_price3`, `traffic_price4`, `traffic_price5`, `traffic_price6`, `traffic_price7`, `traffic_price8`, `pay_yn1`, `pay_yn2`, `pay_yn3`, `pay_yn4` , `Mer_id`, `item_id` ) VALUES ('$contact[0]','$contact[1]','$contact[2]','$contact[3]','$contact[4]','$contact[5]','$contact[6]','$contact[7]','$contact[8]','$contact[9]','$contact[10]','$contact[11]','$contact[12]','$contact[13]','$contact[14]','$contact[15]','$contact[16]','$contact[17]','$contact[18]','$contact[19]','$contact[20]','$contact[21]','$contact[22]','$contact[23]','$contact[24]','$contact[25]','$contact[26]','$contact[27]','$contact[28]','$contact[29]','$id','$New_item_id')") or die(mysqli_error($con));

$rowList = mysqli_fetch_array($sqltran);

echo json_encode($string1);

mysqli_close($con);
