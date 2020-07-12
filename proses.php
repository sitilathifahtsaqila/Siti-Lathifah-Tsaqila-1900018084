<?php
    extract($_REQUEST);
    $file=fopen("webinar.txt","a");


    fwrite($file,"Frist Name :");
    fwrite($file, $fname ."\n");
    fwrite($file,"Last Name :");
    fwrite($file, $lname ."\n");
    fwrite($file,"Email :");
    fwrite($file, $email ."\n");
    fwrite($file,"Institusi :");
    fwrite($file, $ins ."\n");
    fwrite($file,"Prodi :");
    fwrite($file, $pro ."\n");
    header("location: Form Webinar.php");
 ?>
