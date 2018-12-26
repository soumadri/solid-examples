<?php
namespace TNQ\DataStorage;

class DBDataStore implements DBStoreInterface
{
    public function getData() : string
    {
        return "DB: Get data";
    }

    public function setData(string $data)
    {
        echo "DB: Set data: " . $data . "\r\n";
    }

    public function getConnectionString() : string
    {
        return "DB: Some connection string";
    }
}
