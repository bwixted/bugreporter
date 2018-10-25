<?php 

  fileName = "logs.txt";
  //fileName = 'zzcrash_'.date('Y-m-d_H-i-s').'.txt';

  $file = fopen($fileName,'a'); 

  if ($file == false) {
    print("Could not open crash file");
  }
  else {
    print("file opened");
  }

  foreach($_POST as $key => $value) 
  {
    $reportLine = $key." = ".$value."\n";
    fwrite($file, $reportLine);
  }

  print("closing file");
  fclose($file);

?>
