<?php

require_once __DIR__.'/vendor/autoload.php';

$parser = new DivineOmega\BabyTrackerDataParser\Parser(getenv('PATH_TO_ZIP_FILE'));

$records = $parser->parseBabyRecords();

foreach($records as $record) {
    if ($record instanceof \DivineOmega\BabyTrackerDataParser\BabyRecords\HealthRecord) {
        print_r($record);
    }
}