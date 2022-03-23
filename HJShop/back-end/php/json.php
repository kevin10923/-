<?php
if (isset($_POST["size"])) {
  $size = $_POST["size"];
}
if (isset($_POST["bbb"])) {
  $bbb = $_POST["bbb"];
}
header('Content-type: application/json;charset=utf-8');
echo json_encode(json_decode($size));
function arrayPrint($arrayName, $flag = '')
{ //array重新排列
  if ($flag == true) {
    ob_start();
    echo "<br><pre>";
    print_r($arrayName);
    echo "</pre><br>";
    $str = ob_get_clean();
    return $str;
  } else {
    echo "<br><pre>";
    print_r($arrayName);
    echo "</pre><br>";
  }
}
