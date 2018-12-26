<?php

use TNQ\DataStorage\IDataStore;

class RecordManager
{
    public function updateRecords(IDataStore $dataStore, $data)
    {
        $dataStore->setData($data);
    }
}

