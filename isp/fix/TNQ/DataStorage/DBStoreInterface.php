<?php
namespace TNQ\DataStorage;

interface DBStoreInterface extends DataStoreInterface
{

    public function getConnectionString() : string;

}
