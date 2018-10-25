<?php 

  $fileName = '/temp/crash_'.date('Y-m-d_H-i-s').'.txt';

  $file = fopen($fileName,'w'); 

  foreach($_POST as $key => $value) {
    $reportLine = $key." = ".$value."\n";
        fwrite($file, $reportLine) 
    }
  fclose($file);

?>
