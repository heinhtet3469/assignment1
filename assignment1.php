<?php
function generate_password($length = 0){
    $chars =  'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz'.//character which will be generated randomly
              '0123456789`@#$%^&}';
  
    $str = '';
    $max = strlen($chars) ;
  
    for ($i=0; $i < $length; $i++)
      $str .= $chars[rand(0, $max)];
  
    return $str;
  }
echo generate_password(20);

echo "<br/>";
echo "<br/>";


?>