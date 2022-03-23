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
	$dbuser = "root";              # 使用者帳號
	$dbpassword = "";              # 使用者密碼
	$dbname = "hjshop";            # 資料庫名稱
	$con = new mysqli($server, $dbuser, $dbpassword, $dbname);
} else {
	$con = mysqli_connect("211.22.166.15:3306", "souer", "31r24DK1bf", "souertest");  //開啟MySQL資料庫
}
// Check connection
if (mysqli_connect_errno()) {
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
} else {
	//echo "susccs!";
}

$sqltran = mysqli_query($con, "SELECT * FROM iteminfo WHERE item_id=$id") or die(mysqli_error($con));
$rowList = mysqli_fetch_array($sqltran);
$pic1 = $rowList['pic1'];                    //0
$pic2 = $rowList['pic2'];                    //1
$pic3 = $rowList['pic3'];                    //2
$pic4 = $rowList['pic4'];                    //3
$pic5 = $rowList['pic5'];                    //4
$pic6 = $rowList['pic6'];                    //5
$pic7 = $rowList['pic7'];                    //6
$pic8 = $rowList['pic8'];                    //7
$pic9 = $rowList['pic9'];                    //8
$item_name = $rowList['item_name'];          //9
$price = $rowList['price'];                  //10
$self_num = $rowList['self_num'];            //11
$size = $rowList['size'];                    //12
$kg = $rowList['kg'];                        //13
$group_num = $rowList['group_num'];          //14
$least = $rowList['least'];                  //15
$layup = $rowList['layup'];                  //16
$info = $rowList['info'];                    //17
$traffic_price1 = $rowList['traffic_price1']; //18
$traffic_price2 = $rowList['traffic_price2']; //19
$traffic_price3 = $rowList['traffic_price3']; //20
$traffic_price4 = $rowList['traffic_price4']; //21
$traffic_price5 = $rowList['traffic_price5']; //22
$traffic_price6 = $rowList['traffic_price6']; //23
$traffic_price7 = $rowList['traffic_price7']; //24
$traffic_price8 = $rowList['traffic_price8']; //25
$pay_yn1 = $rowList['pay_yn1'];              //26
$pay_yn2 = $rowList['pay_yn2'];              //27
$pay_yn3 = $rowList['pay_yn3'];              //28
$pay_yn4 = $rowList['pay_yn4'];              //29
$contxt = $pic1 . "^" . $pic2 . "^" . $pic3 . "^" . $pic4 . "^" . $pic5 . "^" . $pic6 . "^" . $pic7 . "^" . $pic8 . "^" . $pic9 . "^" . $item_name . "^" . $price . "^" . $self_num . "^" . $size . "^" . $kg . "^" . $group_num . "^" . $least . "^" . $layup . "^" . $info . "^" . $traffic_price1 . "^" . $traffic_price2 . "^" . $traffic_price3 . "^" . $traffic_price4 . "^" . $traffic_price5 . "^" . $traffic_price6 . "^" . $traffic_price7 . "^" . $traffic_price8 . "^" . $pay_yn1 . "^" . $pay_yn2 . "^" . $pay_yn3 . "^" . $pay_yn4;

//$sqltran = mysqli_query($con, "UPDATE test SET ans0='$contxt' WHERE id=1") or die(mysqli_error($con));

//非 json
//echo $contxt;

//jspn
echo json_encode($contxt);

mysqli_close($con);
