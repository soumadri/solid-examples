<?php
namespace TNQ\DataStorage;

use TNQ\DataStorage\IDataStore;

interface IDBDataStore extends IDataStore
{
    public function getConnectionString(): string;
}
