<?php
echo ("here ");
    $file = "Sentiment-Analyzable_Dataset.csv";

    if(!file_exists($file)) die("I'm sorry, the file doesn't seem to exist.");

    $type = filetype($file);
    // Get a date and timestamp
    $today = date("F j, Y, g:i a");
    $time = time();
    // Send file headers
    header("Content-type: $type");
header('Content-type: application/vnd.ms-excel');
    header("Content-Disposition: attachment;filename=.$file");
    //header("Content-Transfer-Encoding: binary"); 
    header('Pragma: no-cache'); 
    header('Expires: 0');
    // Send the file contents.
    set_time_limit(0); 
   readfile($file);
//$csv_output=stripcslashes($_POST['xlsx']);
//print $csv_output;
exit;
?>