<?php    
require_once 'autoloader.php';  

use TNQ\DataStorage\DataStorageManager;    

$dataStore = new DataStorageManager();
$dataStore->setData("Some updated value");
echo $dataStore->getData();

$recordsManager = new RecordManager($dataStore);
$recordsManager->updateRecords("New value");

