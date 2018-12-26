<?php
namespace TNQ\DataStorage;

interface IDataStore
{
    public function getData();

    public function setData($data);    
}
