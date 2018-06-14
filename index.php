<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html><head>
<meta content="text/html; charset=ISO-8859-1" http-equiv="content-type"><title>Ist Lars schon im Bett?</title>
<style type="text/css">
<!--
body { background-color:#5474a8; }
h1 { text-align: center; font-family: "Arial Black", Gadget, sans-serif; font-size: 4em; }
img.center {
position: absolute;
left: 50%;
width: 960px;
margin-left: -480px; /* negative HÃ¤lfte von width:400px */
top: 48%;
height: 540px;
margin-top: -270px; /* negative HÃ¤lfte von height:150px */
}
-->
</style>

</head>
<body>

<?php
$bettflag = file_get_contents('bettflag/bettflag');
$bool = filter_var($bettflag, FILTER_VALIDATE_BOOLEAN);

if ($bool) {
  echo '<img class="center" src="sleeping.gif">';
  echo '<h1>Lars ist schon im Bett.</h1>';
} else {
  echo '<img class="center" src="Southpark-WoW.jpg">';
  echo '<h1>Lars ist wach.</h1>';
}

?>

</body></html>