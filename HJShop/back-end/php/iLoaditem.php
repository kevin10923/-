<?php
$id = $_POST['id'];

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


$sqltran = mysqli_query($con, "SELECT * FROM `iteminfo` WHERE Mer_id='$id'") or die(mysqli_error($con));

$arrVal = array();

$i = 1;
while ($rowList = mysqli_fetch_array($sqltran)) {
	$name = array(
		//'item_id' => $i,
		'item_id' => $rowList['item_id'],
		'pic1' => $rowList['pic1'],                    //0
		'pic2' => $rowList['pic2'],                    //1
		'pic3' => $rowList['pic3'],                    //2
		'pic4' => $rowList['pic4'],                    //3
		'pic5' => $rowList['pic5'],                    //4
		'pic6' => $rowList['pic6'],                    //5
		'pic7' => $rowList['pic7'],                    //6
		'pic8' => $rowList['pic8'],                    //7
		'pic9' => $rowList['pic9'],                    //8
		'item_name' => $rowList['item_name'],          //9
		'price' => $rowList['price'],                  //10
		'self_num' => $rowList['self_num'],            //11
		'size' => $rowList['size'],                    //12
		'kg' => $rowList['kg'],                        //13
		'group_num' => $rowList['group_num'],          //14
		'least' => $rowList['least'],                  //15
		'layup' => $rowList['layup'],                  //16
		'info' => $rowList['info'],                    //17
		'traffic_price1' => $rowList['traffic_price1'], //18
		'traffic_price2' => $rowList['traffic_price2'], //19
		'traffic_price3' => $rowList['traffic_price3'], //20
		'traffic_price4' => $rowList['traffic_price4'], //21
		'traffic_price5' => $rowList['traffic_price5'], //22
		'traffic_price6' => $rowList['traffic_price6'], //23
		'traffic_price7' => $rowList['traffic_price7'], //24
		'traffic_price8' => $rowList['traffic_price8'], //25
		'pay_yn1' => $rowList['pay_yn1'],              //26
		'pay_yn2' => $rowList['pay_yn2'],              //27
		'pay_yn3' => $rowList['pay_yn3'],              //28
		'pay_yn4' => $rowList['pay_yn4'],              //29
	);

	array_push($arrVal, $name);
	$i++;
}
echo json_encode($arrVal);
	/*
 	$rowList = mysqli_fetch_array($sqltran);
 	// 下方 照順序將0-28全部列出 串給前端
 	$contact0=$rowList['item_name'];
 	$contact1=$rowList['pic1'];
 	$contact2=$rowList['pic2'];
 	$contact3=$rowList['pic3'];
 	$contact4=$rowList['pic4'];
 	$contact5=$rowList['pic5'];
 	$contact6=$rowList['pic6'];
 	$contact7=$rowList['pic7'];
 	$contact8=$rowList['pic8'];
 	$contact9=$rowList['pic9'];
 	$contact10=$rowList['info'];
 	$contact11=$rowList['group_num'];
 	$contact12=$rowList['coin'];
 	$contact13=$rowList['price'];
 	$contact14=$rowList['layup'];
 	$contact15=$rowList['least'];
 	$contact16=$rowList['kg'];
 	$contact17=$rowList['traffic_price1'];
 	$contact18=$rowList['traffic_price2'];
 	$contact19=$rowList['traffic_price3'];
 	$contact20=$rowList['traffic_price4'];
 	$contact21=$rowList['traffic_price5'];
 	$contact22=$rowList['traffic_price6'];
 	$contact23=$rowList['traffic_price7'];
 	$contact24=$rowList['traffic_price8'];
 	$contact25=$rowList['pay_yn1'];
 	$contact26=$rowList['pay_yn2'];
 	$contact27=$rowList['pay_yn3'];
 	$contact28=$rowList['self_num'];

 	$string1=$contact0.'^'.$contact1.'^'.$contact2.'^'.$contact3.'^'.$contact4.'^'.
 	$contact5.'^'.$contact6.'^'.$contact7.'^'.$contact8.'^'.$contact9.'^'.$contact10.'^'.
 	$contact11.'^'.$contact12.'^'.$contact13.'^'.$contact14.'^'.$contact15.'^'.
 	$contact16.'^'.$contact17.'^'.$contact18.'^'.$contact19.'^'.$contact20.'^'.
 	$contact21.'^'.$contact22.'^'.$contact23.'^'.$contact24.'^'.$contact25.'^'.
 	$contact26.'^'.$contact27.'^'.$contact28;
	
	echo json_encode($string1);
	
 	mysqli_close($con);
    */
