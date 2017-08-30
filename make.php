<?php

include_once('db_conn.php');
// print_r($_POST);
  if(isset($_POST) and !empty($_POST)){
      $toname = mysql_real_escape_string($_POST['name1']);
      $fromname = mysql_real_escape_string($_POST['name2']);
      $email = mysql_real_escape_string($_POST['email']);
      $message = mysql_real_escape_string($_POST['message']);
     
      $l_id = table_last_id();
      
      if($l_id == "Null"){
        echo "Failed to get Last ID";
      }else{
        $ii = $l_id + 1;
        $ursid = md5("bd".$ii);
      }

     
      $qur = "insert into `cb001` (`toname`,`ursid`,`fromname`,`email`,`message`) values('".$toname."','".$ursid."','".$fromname."','".$email."','".$message."')";
      if(mysql_query($qur)){
      $fid = mysql_insert_id($conn);
      $loc = 'wish/'.$ursid;
       header("location: $loc");
      }else{
       // echo mysql_error();
        header('location: index.php');
      }
      

  }else{
     //echo "Error 2";
    header('location: index.php');
  }

  function table_last_id(){
    $quf= "select id from `cb001` order by `id` desc limit 1";
    if($fetch = mysql_query($quf)){
      $row = mysql_fetch_assoc($fetch);
      $id = $row['id'];
      if($id >= '0' and $id !=""){
        return $id;
      }else{
        return '0';
      }
    }else{
        return '0';
    }
  }

?>