<?php 
$handle = fopen("bookmarks.html", "r");
$linesnew =array();
$linesold =array();

if ($handle) {
    while (($line = fgets($handle)) !== false) {
        
        //split adddate
        if (preg_match('/ADD_DATE="([0-9]*)"/', $line, $matches, PREG_OFFSET_CAPTURE)) {
                    
   
            //if addadate >= xxxxxxxxx 
            if ($matches[1][0] >= 1420074061 ) {
                $linesnew[]= $line;
                //print_r($matches);
                //echo $matches[1][0] .'<br/>';
            } else {//we'll keep just new bookmarks
                $linesold[]= $line;
            }
        } else { //other lines
            $linesnew[]= $line;
            $linesold[]= $line;
            //echo $linesnew.'<br/>';

        }

    }

    $fp = fopen('outputnew.html', 'w');

        foreach ($linesnew as $line) {
            fputs($fp,$line);
        }
    fclose($fp);
    $fp = fopen('outputold.html', 'w');

    foreach ($linesold as $line) {
        fputs($fp,$line);
    }
    fclose($fp);
    //file_put_contents('output.html', var_export($lines, TRUE));

} else {
    // error opening the file.
} 
?>