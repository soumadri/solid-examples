<?php
namespace TNQ\DataStorage;

interface DataStoreInterface
{
    public function getData();

    public function setData($data);
}
