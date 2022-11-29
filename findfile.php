<?php
//call the function and display result using var_dump
$res = locateUniverseFormula('/tmp/Documents');
var_dump($res);

function locateUniverseFormula($directory)
{
    //scaning the directory /tmp/Documents
    $files = scandir($directory);
    //go true each directory
    foreach ($files as $file) {
        //iliminating the first two directories
        if ($file != '.' && $file != '..') {
            //check if the next directory is a directory or a file
            if (is_dir($dir = $directory . '/' . $file)) {
                //repeating the loop to check whether its a file or dir if the directory is not empty
                if (!empty($res = locateUniverseFormula($dir))) {

                    return $res;
                }
                //if its not a dir and file name is universe-formula show the result
            } elseif ($file == 'universe-formula') {

                return $directory;
            }
        }
    }
    //if not
    return null;
}
