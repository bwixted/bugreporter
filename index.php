<?php 

  $fileName = '/temp/crash'.date('Y-m-d_H-i-s').'.txt';


  $file = fopen($fileName,'w') 

  foreach($_POST as $key => $value) {
    $reportLine = $key." = ".$value."\n";
        fwrite($file, $reportLine) or die ('Could not write to report file ' . $reportLine);
    }
  fclose($file);

?>
