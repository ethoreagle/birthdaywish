<?php
	include_once('db_conn.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Birthday Wishes</title>
	<link rel="stylesheet" type="text/css" href="<?php echo SITE_URL; ?>styles.css">
	<link rel="stylesheet" type="text/css" href="<?php echo SITE_URL; ?> animate.css">
</head>
<body>
   <!-- <audio src="audio/music.mp3" autoplay="autoplay" loop="loop"></audio> -->
<div class="canvas">
  <div class="birthday_box">
  <center>

  <img src="images/page1-2.jpg" width="50%" class="animated pulse infinite">
  <h1> Wish your Friend</h1>
  <form method="post" action="make.php" class="site_form">
    <input type="text" name="name1" required><br>
    <textarea type="text" name="message" required resizable="false"></textarea><br>
    <input type="text" name="name2" required><br>
    <input type="email" name="email" required><br>

    <input type="submit" value="Make Wishes" >

  </form>
  <p style="color: #fff;"> By : <br>   Logictuts.Com </p>
  </div>

 </center>


</div>
<footer>
&copy LogicTuts.com | 2017
</footer>

</body>
</html>