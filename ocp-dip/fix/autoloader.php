<?php
function autoloader($className)
{
    $className = str_replace("\\", "/", $className);
    require_once "./" . $className . '.php';
}

spl_autoload_register('autoloader');
    
