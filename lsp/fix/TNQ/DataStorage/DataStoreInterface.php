<?php
namespace TNQ\DataStorage;

interface DataStoreInterface
{
    public function getData() : string;

    public function setData(string $data);
    
}
