<?php 
    spl_autoload_register('myAutoLoader');
    spl_autoload_register('myAutoLoader2');

    function myAutoLoader($className){
        $path = "../classes/";
        $ext = ".class.php";
        $fullPath = $path . $className . $ext;
        
        if(!file_exists($fullPath)) {
            return false;
        }

        include_once $fullPath;
    }
    
    function myAutoLoader2($className){
        $path = "classes/";
        $ext = ".class.php";
        $fullPath = $path . $className . $ext;
        
        if(!file_exists($fullPath)) {
            return false;
        }

        include_once $fullPath;
    }
?>