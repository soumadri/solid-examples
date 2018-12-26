<?php
namespace TNQ\DataStorage;

class HTTPDataStore implements INetworkDataStore
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
