<?php
namespace TNQ\DataStorage;

class DBDataStore implements DataStoreInterface
{
    public function getData() : string
    {
        return "DB: Get data";
    }

    public function setData(string $data)
    {
        echo "DB: Set data: " . $data . "\r\n";
    }

}
