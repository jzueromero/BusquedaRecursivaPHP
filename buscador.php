<?php

// Does not support flag GLOB_BRACE
function rsearch($folder, $pattern) {
    $iti = new RecursiveDirectoryIterator($folder);
    foreach(new RecursiveIteratorIterator($iti) as $file){
         if(strpos($file , $pattern) !== false){
            return $file;
         }
    }
    return false;
}

 $filepath = rsearch('..\\imagenes\\','batman.jpg');
echo $filepath;
echo '<img src="'.$filepath.'" />';
?>