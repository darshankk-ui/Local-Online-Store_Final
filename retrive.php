<?php
	require 'config.php';
 $sql = "select image from images where id=2";
 $result = mysqli_query($con,$sql) or die(sql);
 $row = mysqli_fetch_array($result);

 $image_src2 = $row['image'];
 //echo $image_src2;
 echo "<img src='".$image_src2."'alt='asdf' >";
?>
