<?php
namespace TNQ\Employees;

use TNQ\DataStorage\DataStoreInterface;

class RecordManager
{
    function __construct(DataStoreInterface $dataStore)
    {
        $this->dataStore = $dataStore;
    }

    public function updateRecords($data)
    {
        $this->dataStore->setData($data);
    }
}

