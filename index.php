<?php 

  print "Hello World!"

     Outputs all POST parameters to a text file. The file name is the date_time of the report reception
    $fileName = '/temp/crash'.date('Y-m-d_H-i-s').'.txt';


    $file = fopen($fileName,'w') 
    fclose($file);

    //foreach($_POST as $key => $value) {
    //$reportLine = $key." = ".$value."\n";
        //fwrite($file, $reportLine) or die ('Could not write to report file ' . $reportLine);
    //}
    //fclose($file);

?>