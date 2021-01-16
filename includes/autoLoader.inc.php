<?php 
    spl_autoload_register('myAutoLoader');

    function myAutoLoader($className){
        $path = "classes/";
        $ext = ".class.php";
        $fullPath = $path . $fileName . $ext;
        
        if(!file_exists(fullPath)) {
            return false;
        }

        include_once $fullPath;
    }
?>