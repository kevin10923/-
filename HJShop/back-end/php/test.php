<?php
$link=mysql_connect(“localhost”,”root”,”″);
if( !$link ) echo “FAILD!連線錯誤，使用者名稱密碼不對”;
else echo “OK!可以連線”;
?>