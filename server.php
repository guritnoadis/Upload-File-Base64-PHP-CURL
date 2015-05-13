<?php  
file_put_contents('img.png', base64_decode($_POST['image']));
echo "File saved to img.png";
?>