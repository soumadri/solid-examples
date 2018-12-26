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
        echo "HTTP: Set data: " . $data . "\r\n";
    }

    public function getURL() : string
    {
        return "Some HTTP URL";
    }
}
