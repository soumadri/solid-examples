<?php
namespace TNQ\DataStorage;

class DBDataStore implements DataStoreInterface
{
    public function getData()
    {
        return array(
            "1" => "Val1",
            "2" => "Val2"
        );
    }

    public function setData($data)
    {
        echo "DB: Set data: " . $data . "\r\n";
    }

}
