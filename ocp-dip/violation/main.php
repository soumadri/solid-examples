<?php 
require_once 'autoloader.php';

use TNQ\DataStorage\DataStorageManager;

class EmployeeRecords
{
    public static function updateEmployee()
    {
        $value = getopt("v:");

        if ($value["v"] == "") {
            echo "Please provide a value\r\n";
        } else {
            //Store the data to backend            
            $dataStore = new DataStorageManager();
            $recordsManager = new RecordManager($dataStore);
            $recordsManager->updateRecords($value["v"]);
        }
    }
}

EmployeeRecords::updateEmployee();