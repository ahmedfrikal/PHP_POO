<?php

namespace Class\Reservation;

class Reservation
{

     const APPROVAL_PENDING='en attente';
     const APPROVAL_APPROVED='approuvé';
     const APPROVAL_REJECTED='rejetée';

     public function __construct()
     {
         echo self::APPROVAL_APPROVED;
     }
}