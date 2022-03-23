
<?php
					//$con = new mysqli($server, $dbuser, $dbpassword, $dbname);
                    header('Content-Type: text/html; charset=utf-8');				
					$con = mysqli_connect("localhost", "root", "","test");  //開啟MySQL資料庫
                    //mysqli_query($con, "SET NAMES 'utf8mb4'");
                    mysqli_query($con, "SET NAMES 'utf8'");
 				// Check connection
				if (mysqli_connect_errno()) {
  					echo "Failed to connect to MySQL: " . mysqli_connect_error();
				}else{                    
					echo "susccs!";
                    $sqltran = mysqli_query($con, "SELECT * FROM wudi WHERE id < (SELECT MAX(id) FROM wudi)+1 AND id > (SELECT MAX(id) FROM wudi)-15")or die(mysqli_error($con));
                    $data = mysqli_fetch_array($sqltran);
                    arrayPrint($data);
				}

	
 	mysqli_close($con);
     function arrayPrint($arrayName,$flag=''){//array重新排列
        if($flag==true){
            ob_start();
            echo "<br><pre>";
            print_r($arrayName);
            echo "</pre><br>";
            $str = ob_get_clean();
            return $str;
        }else{
            echo "<br><pre>";
            print_r($arrayName);
            echo "</pre><br>";
        }
    }     
?>