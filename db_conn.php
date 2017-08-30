<?php
include_once('site_defines.php');
if($conn = mysql_connect('localhost','root','')){
  if (mysql_select_db("lt_projects")){
    //echo "Database Connected";
  }else{
    //echo "not Connected";
  }
}

?>