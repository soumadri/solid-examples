<?php
namespace TNQ\DataStorage;

class HTTPDataStore implements DataStoreInterface
{
    public function getData()
    {
        echo "HTTP: Get data\r\n";
    }

    public function setData($data)
    {
        echo "HTTP: Set data: " . $data . "\r\n";
    }
}
