<?php

class Cart
{
  private int  $quantity;
  private float   $totalPrice;

   function __construct(int $quantity,float $totalPrice)
  {
      $this->quantity=$quantity;
      $this->totalPrice=$totalPrice;
  }

    public function getTotalPrice():float
    {
        return $this->totalPrice;
    }
}