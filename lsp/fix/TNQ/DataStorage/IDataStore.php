<?php
namespace TNQ\DataStorage;

interface IDataStore
{
    public function getData(): string;

    public function setData(string $data): void;
    
    public function getURL(): string;
}
