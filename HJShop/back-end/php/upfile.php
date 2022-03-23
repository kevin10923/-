<?php
try {
   if (isset($_FILES["file"])) {     //  處理多個檔案 
      for ($i = 0; $i < 9; $i++) {
         $name = $_FILES["file"]["name"][$i];
         $tmp = $_FILES["file"]["tmp_name"][$i];
         if (!empty($name)) {      // 上傳檔案
            $_SESSION["userid"] = "item_pics";
            $url = "../../upload/" . $_SESSION["userid"] . "/";   //记录路径
            $url1 = $url . $_FILES["file"]["name"][$i];
            move_uploaded_file($_FILES["file"]["tmp_name"][$i], $url1);
            echo "檔案$name 上傳成功<br/>";
            unlink($tmp);
            echo $url1;
         }
      }
   } else {
      echo "錯誤";
   }
} catch (Exception $e) {
   $e->getMessage();
}
?>
<script>
   // setTimeout("location.href='../add-product.html'",10); // 3秒後跳轉頁面
   //window.location.href = "../add-product.html";
</script>