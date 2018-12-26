<?php

use TNQ\DataStorage\DataStoreInterface;
use TNQ\DataStorage\HTTPDataStore;

class RecordManager
{
    function __construct(DataStoreInterface $dataStore)
    {
        $this->dataStore = $dataStore;
    }

    public function updateRecords($data)
    {
        $this->dataStore->setData($data);

        //..do some processing of data based on the URL
        $this->dataStore->getURL();

        /*if($this->dataStore instanceof HTTPDataStore || $this->dataStore instanceof FTPDataStore)
        {
            $this->dataStore->getURL();
        }*/
    }
}

