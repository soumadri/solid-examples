<?php
namespace TNQ\DataStorage;

class DBDataStore implements IDataStore
{
    public function getData()
    {
        echo "DB: Get data\r\n";
    }

    public function setData($data)
    {
        echo "DB: Set data: " . $data . "\r\n";
    }

}
