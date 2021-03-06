<?php
namespace TNQ\DataStorage;

interface DataStoreInterface
{
    public function getData() : string;

    public function setData(string $data);

    public function getURL() : string;

    public function getConnectionString() : string;
}
