<?php
namespace TNQ\DataStorage;

use TNQ\DataStorage\IDataStore;

interface INetworkDataStore extends IDataStore
{
    public function getURL(): string;
}
