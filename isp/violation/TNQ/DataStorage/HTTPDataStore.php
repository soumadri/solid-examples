<?php
namespace TNQ\DataStorage;

class HTTPDataStore implements IDataStore
{
    public function getData()
    {
        return "HTTP: Get data\r\n";
    }

    public function setData($data)
    {
        echo "HTTP: Set data: " . $data . "\r\n";
    }    
}
