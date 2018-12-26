<?php
namespace TNQ\DataStorage;

class FTPDataStore implements IDataStore
{
    public function getData()
    {
        return "FTP: Get data";
    }

    public function setData($data)
    {
        echo "FTP: Set data: " . $data . "\r\n";
    }    
}
