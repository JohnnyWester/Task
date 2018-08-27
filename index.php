<?php


require_once 'AllPaymentsStrategy.php';
require_once 'AllPaymentsExceptCaridStrategy.php';
require_once 'CaridPaymentStrategy.php';
require_once 'Payment.php';

$array = [

    0 => [
        'id' => 101,
        'value' => 1,
    ],

    1 => [
        'id' => 102,
        'value' => 2,
    ],

    2 => [
        'id' => 103,
        'value' => 3,
    ],
];


$codeIdOnly = 1;

$domain = 'carid.com';

$payment = new Payment(new CaridPaymentStrategy());
$result = $payment->getPayment($array, $codeIdOnly, $domain);
echo "<pre>";
var_dump($result);

$paymentTwo = new Payment(new AllPaymentsStrategy());
$resultTwo = $paymentTwo->getPayment($array, $codeIdOnly, $domain);
echo "<pre>";
var_dump($resultTwo);

$paymentThree = new Payment(new AllPaymentsExceptCaridStrategy());
$resultThree = $paymentThree->getPayment($array, $codeIdOnly, $domain);
echo "<pre>";
var_dump($resultThree);