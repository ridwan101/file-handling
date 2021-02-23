<!DOCTYPE html>
<html>
<head>

   <title>File handling</title>

 </head>
<body>
   <h1>PHP file Example</h1>

   <?php

   $filePath="Registration.txt";

   echo readfile($filePath);

   echo "<br>";

   echo fopen($filePath,"r");

   echo "<br>";

   $f =fopen($filePath,"r");

   echo fread($f,filesize($filePath));

  $f1=fopen($filePath,"w");

  echo fwrite($f1,filesize($filePath));




   ?>

</body>
</html>   