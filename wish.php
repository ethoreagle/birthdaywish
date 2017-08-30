<?php

include_once('db_conn.php');
//print_r($_GET);
if(isset($_GET['ursid']) and strlen($_GET['ursid'])>=1){

  $qry = "select * from `cb001` where `ursid` = '".$_GET['ursid']."' limit 1";
  if($fetch = mysql_query($qry)){
    $row = mysql_fetch_assoc($fetch);
    //print_r($row);
  }else{
    echo " UNABLE TO GET DATA FROM DATABASE";
  }

}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Birthday Wishes</title>
	 <link rel="stylesheet" type="text/css" href="<?php echo SITE_URL; ?>styles.css">
  <link rel="stylesheet" type="text/css" href="<?php echo SITE_URL; ?>animate.css">
</head>
<body>
   <audio src="<?php echo SITE_URL; ?>audio/music.mp3" autoplay="autoplay" loop="loop"></audio>
<div class="canvas">
  <div class="birthday_box">
  <center>

  <img src="<?php echo SITE_URL; ?>images/page1-3.png" class="animated shake infinite" width="80%">
  <h1><?php echo $row['toname']; ?></h1>
  <p class="message"><?php echo $row['message']; ?></p>
  <img src="<?php echo SITE_URL; ?>images/star.png" class="animated flash infinite" width="120px" style="display:inline-block">
  <img src="<?php echo SITE_URL; ?>images/cake.png" width="120px" style="display:inline-block">
  <img src="<?php echo SITE_URL; ?>images/star.png" class="animated flash infinite" width="120px" style="display:inline-block">
  <p class="message"> <span style="font-size: 1em">from </span> <br> <?php echo $row['fromname']; ?> </p>
 <p style="color: #fff;"> By : <br>   Logictuts.Com </p>
  </div>
    
 </center>
 


</div>
<footer>
&copy LogicTuts.com | 2017
</footer>

</body>
</html>