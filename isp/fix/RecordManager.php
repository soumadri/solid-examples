<?php

use TNQ\DataStorage\INetworkDataStore;

class RecordManager
{
    public function updateRecords(INetworkDataStore $dataStore, $data)
    {
        $dataStore->setData($data);
        //..some logic
        $dataStore->getURL();
    }
}

