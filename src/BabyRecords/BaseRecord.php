<?php

namespace DivineOmega\BabyTrackerDataParser\BabyRecords;


use Carbon\Carbon;

class BaseRecord
{
    private $recordCategory;
    private $recordSubcategory;
    private $startDate;
    private $finishDate;
    private $details;

    public function __construct(array $data)
    {
        $this->recordCategory = $data['RecordCategory'];
        $this->recordSubcategory = $data['RecordSubcategory'];
        $this->startDate = new Carbon($data['StartDate']);
        $this->finishDate = new Carbon($data['FinishDate']);
        $this->details = $data['Details'];
    }
}