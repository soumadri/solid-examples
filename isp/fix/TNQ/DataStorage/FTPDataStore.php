<?php
namespace TNQ\DataStorage;

class FTPDataStore implements INetworkDataStore
{
    public function getData()
    {
        return "FTP: Get data";
    }

    public function setData($data)
    {
        echo "FTP: Set data: " . $data . "\r\n";
    }   
    
    public function getURL()
    {
        return "FTP: Some URL";
    }
}
