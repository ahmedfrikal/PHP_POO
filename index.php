<?php

require_once ('./Class/Cart.php');

$cart =new Cart(10,30);
var_dump($cart->getTotalPrice());