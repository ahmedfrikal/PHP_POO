<?php

namespace Class\OfficeResevation;

use Class\Enums\OfficeStatus;

class Reservation
{
    private  OfficeStatus $officeStatus;
    public function __construct()
    {
        $this->officeStatus= OfficeStatus::APPROVAL_APPROVED;
    }

}