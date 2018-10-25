<?php 

require 'vendor/autoload.php';

  $from = new SendGrid\Email(null, "test@example.com");
  $subject = "Hello World from the SendGrid PHP Library!";
  $to = new SendGrid\Email(null, "test@example.com");
  $content = new SendGrid\Content("text/plain", "Hello, Email!");
  $mail = new SendGrid\Mail($from, $subject, $to, $content);

  $apiKey = getenv('SENDGRID_API_KEY');
  $sg = new \SendGrid($apiKey);

  $response = $sg->client->mail()->send()->post($mail);
  echo $response->statusCode();
  echo $response->headers();
  echo $response->body();



/**
  $fileName = 'logs.txt';
  //fileName = 'zzcrash_'.date('Y-m-d_H-i-s').'.txt';

  $file = fopen($fileName,'a'); 

  if ($file == false) {
    print("Could not open crash file");
  }
  else {
    print("file opened");
  }

  fwrite($file, "Writing Crash Log");

  foreach($_POST as $key => $value) 
  {
    $reportLine = $key." = ".$value."\n";
    fwrite($file, $reportLine);
  }

  print("closing file");
  fclose($file);
  **/

?>
