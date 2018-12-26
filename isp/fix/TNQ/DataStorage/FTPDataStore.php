<?php
namespace TNQ\DataStorage;

class FTPDataStore implements NetworkStoreInterface
{
    public function getData() : string
    {
        return "FTP: Get data";
    }

    public function setData(string $data)
    {
        echo "FTP: Set data: " . $data . "\r\n";
    }

    public function getURL() : string
    {
        return "FTP: Some FTP URL";
    }
}
