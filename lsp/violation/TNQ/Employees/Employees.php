<?php 
namespace TNQ\Employees;

require_once dirname(__FILE__) . '/../../autoloader.php';

use TNQ\DataStorage\HTTPDataStore;
use TNQ\DataStorage\DBDataStore;

class EmployeeRecords
{
    public static function updateEmployee()
    {
        $value = getopt("v:");

        if ($value["v"] == "") {
            echo "Please provide a value\r\n";
        } else {
            //HTTP storage implementation
            $dataStore = new HTTPDataStore();
            //$dataStore = new DBDataStore();
            $recordsManager = new RecordManager($dataStore);
            $recordsManager->updateRecords($value["v"]);
        }
    }
}

EmployeeRecords::updateEmployee();