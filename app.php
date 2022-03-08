<?php  
  $content = fopen("main.txt","r");
  $array = explode("\r\n", $content);
  $rand = rand(1 , count($array));
  for( 
    $i = count($array); 
    $i--;
    $i > 0;
  )
  {if ($i == $rand)
  {break};
  };
  echo $array[$i]
?>
