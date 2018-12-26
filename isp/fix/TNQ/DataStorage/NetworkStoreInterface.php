<?php
namespace TNQ\DataStorage;

interface NetworkStoreInterface extends DataStoreInterface
{

    public function getURL() : string;

}
