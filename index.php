<?php
/*spl_autoload_register(function($class){
    var_dump(dirname(__DIR__));
    $path= __DIR__ . 'index.php/' .str_replace('\\','/',$class).'.php';
    if(file_exists($path)){
        require  $path;
    }
});*/
require_once ('./NameSpace/Classes/Paypal/Payment.php');
require_once ('./NameSpace/Classes/Stripe/Payment.php');
require_once ('./NameSpace/Classes/User.php');
require_once ('./Enums/Reservation.php');
require_once ('./Enums/OfficeStatus.php');
require_once('./Statique et dessign patern single/ReservationPlat.php');
require_once ('./Heritage/CoffeMachine.php');
require_once ('./Heritage/PremiumCoffeMachine.php');
require_once ('./Exception/User.php');
require_once ('./Exception/Login.php');


use \Class\Stripe\Payment as PaymentStripe;
use \Class\Paypal\Payment as PaymentPaypal;
use \Class\OfficeResevation\Reservation as Reservation;
use \Class\PremiumCoffeMachine\PremiumCoffeMachine as PremiumCoffeMachine;
use \Class\User as User;
use \Class\Login as Login;
use \Class\UserNotVerifiedException as userNotVerifiedException;
/*$payment=new PaymentPaypal();
$reservation = new Reservation();
//var_dump($reservation);
$coffeMachine=new PremiumCoffeMachine();
echo "<br/>";
$coffeMachine->select('deff');

// Définition d'un trait*/
$user=new User("FRIKAL","Ahmed");

$login=new Login($user);
try {
    $login->login($user);
}catch (\Class\UserNotVerifiedException $exception){
    echo "Error";
} finally {
    echo "Finally";
}


