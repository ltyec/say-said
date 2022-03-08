<?php  
  $content = fopen("main.txt","r");
  $array = explode("\r\n", $content);
  $rand = rand(1 , count($array));
  for( 
    $i = count($array); 
    $i--;
  )
  {if ($i == $rand)
  {break;};
  };
  echo $array[$i]
?>
