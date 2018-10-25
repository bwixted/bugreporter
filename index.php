<?php 
var fs = require("fs");
var path = require("path");
var temp_dir = path.join(process.cwd(), 'temp/');

if (!fs.existsSync(temp_dir))
    fs.mkdirSync(temp_dir);

fileName = 'temp/zzcrash_'.date('Y-m-d_H-i-s').'.txt';

  $file = fopen($fileName,'w'); 

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
