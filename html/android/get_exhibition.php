<?php
  include $_SERVER['DOCUMENT_ROOT']."/css/dbconn.php";

  if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $sql = query("SELECT * FROM exhibition WHERE division = 0");
    if($sql) {
      $result = array();
      while($exhibition = $sql->fetch_array()) {
        array_push($result, array("number"=>$exhibition['number'], "isOpen"=>$exhibition['value']));
      }
      echo json_encode(array('result'=>$result), JSON_PRETTY_PRINT+JSON_UNESCAPED_UNICODE);
    }
    else {
      echo '-1';
    }
  }
  else {
    echo '-1';
  }
?>
