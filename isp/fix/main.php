<?php    
    require_once 'autoloader.php';  

    use TNQ\DataStorage\HTTPDataStore;
    use TNQ\DataStorage\DBDataStore;  

    $dataStore = new DBDataStore();
    $dataStore->getData();

    $recordManager = new RecordManager();
    $recordManager->updateRecords($dataStore, "Updated value");

    $dataStore = new HTTPDataStore();    
    
    $recordManager->updateRecords($dataStore, "Updated value");
