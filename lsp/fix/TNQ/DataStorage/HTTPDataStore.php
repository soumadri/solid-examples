<?php
namespace TNQ\DataStorage;

class HTTPDataStore implements DataStoreInterface
{
    public function getData()
    {
        return "HTTP: Get data\r\n";
    }

    public function setData($data)
    {
        echo "HTTP: Set data: " . $data . "\r\n";
    }  
    
    public function getURL()
    {
        return "Some HTTP URL";
    }
}
