<?php
  $myfile = fopen("bettflag", "w");
  
  $txt = $_POST['bett'];
  
  fwrite($myfile, $txt);
  fclose($myfile); 

?>