<?php
  include $_SERVER['DOCUMENT_ROOT']."/css/dbconn.php";
  $id = $_POST['form_id'];
  $table = "audience";
  echo $id;

  $result = query("UPDATE $table SET start_date = NULL WHERE id = '$id'");
  if($result != 0) {
    echo "
      <script>
        alert('취소되었습니다.');
        opener.parent.location='audience.php';
        window.close();
      </script>
    ";
  }
?>
