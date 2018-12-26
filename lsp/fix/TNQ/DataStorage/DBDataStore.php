<?php
namespace TNQ\DataStorage;

class DBDataStore implements IDataStore
{
    public function getData()
    {
        echo array(
            "1" => "val1",
            "2" => "val2"
        );
    }

    public function setData($data)
    {
        echo "DB: Set data: " . $data . "\r\n";
    }

    //Irrelevant for databases
    public function getURL()
    {
        return "";
    }

}
