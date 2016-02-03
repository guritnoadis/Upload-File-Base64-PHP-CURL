<?php
 $filename  = realpath('angkringan.jpg');
 
 $handle    = fopen($filename, "r");
 $image      = fread($handle, filesize($filename));
 fclose($handler); // to save resources

 
 $postData = array(
   'image' => base64_encode($image)
 );

 $curl = curl_init();
 curl_setopt($curl, CURLOPT_URL, 'http://localhost/uploadfilebase64/server.php');
 curl_setopt($curl, CURLOPT_TIMEOUT, 30);
 curl_setopt($curl, CURLOPT_POST, 1);
 curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
 curl_setopt($curl, CURLOPT_POSTFIELDS, $postData);
 $res=curl_exec($curl);
echo $res;
 curl_close ($curl);
 ?>
