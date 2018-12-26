<?php
namespace TNQ\DataStorage;

class DataStorageManager
{
    public function getData()
    {
        return "Some data from DB\r\n";
    }

    public function setData($data)
    {
        echo "Stored data: " . $data . "\r\n";
    }
}

