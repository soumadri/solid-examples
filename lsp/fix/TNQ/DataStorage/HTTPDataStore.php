<?php
namespace TNQ\DataStorage;

class HTTPDataStore implements DataStoreInterface
{
    public function getData() : string
    {
        return "HTTP: Get data\r\n";
    }

    public function setData(string $data)
    {
        //...Convert to JSON and then store
        echo "HTTP: Set data: " . $data . "\r\n";
    }

}
