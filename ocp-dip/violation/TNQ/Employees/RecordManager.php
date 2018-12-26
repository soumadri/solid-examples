<?php
namespace TNQ\Employees;

use TNQ\DataStorage\DataStorageManager;

class RecordManager
{
    function __construct(DataStorageManager $dataStore)
    {
        $this->dataStore = $dataStore;
    }

    public function updateRecords($data)
    {
        //...some processing of data

        $this->dataStore->setData($data);
    }
}

