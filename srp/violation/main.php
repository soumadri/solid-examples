<?php 
class EmployeeRecords
{
    private static function storeData($data)
    {
        echo "Data stored: " . $data . "\r\n";
    }

    public static function updateEmployee()
    {
        $value = getopt("v:");

        if ($value["v"] == "") {
            echo "Please provide a value\r\n";
        } else {
            //Store the data to backend
            self::storeData($value["v"]);
        }
    }
}

EmployeeRecords::updateEmployee();