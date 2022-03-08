<?php  
  $content = fopen("main.txt","r");
  $array = explode("\r\n", $content);
  $rand = rand(0 , count($array));
  for( 
    $i = count($array); 
    $i--;
    $i > $rand;
  )
  echo $array[$i]
?>
