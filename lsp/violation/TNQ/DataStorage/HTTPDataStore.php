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
        $json = json_decode($data);

        if ($json !== null) {
            echo "HTTP: Set data: " . $data . "\r\n";
        } else {
            echo "HTTP: Set data: Data not updated\r\n";
        }
    }

    public function getURL()
    {
        return "Some HTTP URL";
    }
}
