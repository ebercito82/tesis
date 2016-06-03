<?php
//echo date('Y')	;
function generateString ($length = 3){
  $string = "";
  $possible = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
  $i = 0;
  while ($i < $length) {
    $char = substr($possible, mt_rand(0, strlen($possible)-1), 1);
    $string .= $char;
    $i++;
  }
  $possible="#$%&()_:;<>?/";
  $i = 0;
  while ($i < $length) {
    $char = substr($possible, mt_rand(0, strlen($possible)-1), 1);
    $string .= $char;
    $i++;
  }
  $possible="0123456789";
  $i = 0;
  while ($i < $length) {
    $char = substr($possible, mt_rand(0, strlen($possible)-1), 1);
    $string .= $char;
    $i++;
  }
  return $string;
}
$pass=md5(generateString());
echo $pass;
?>
