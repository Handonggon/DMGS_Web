<?php
  include $_SERVER['DOCUMENT_ROOT']."/css/dbconn.php";

  if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $result = [];
    for($i = 1; $i < 7; $i++) {
      $sql = query("SELECT * FROM exhibit WHERE number = '$i';");
      if($sql) {
        $result[$i] = [];
        while($exhibit = $sql->fetch_array()) {
          array_push($result[$i], array("name"=>$exhibit['name'], "MAC"=>$exhibit['MAC'], "space"=>$exhibit['space'], "img"=>"35.221.108.183/exhibition/uploads/".$exhibit['img']));
        }
      }
      else {
        echo '-1';
      }
    }
    print_r(json_encode(array('result'=>$result), JSON_PRETTY_PRINT+JSON_UNESCAPED_UNICODE));
  }
  else {
    echo '-1';
  }
?>