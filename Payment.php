<?php

require_once('PaymentStrategy.php');

class Payment
{
    protected $payment;

    /**
     * Payment constructor.
     * @param PaymentStrategy $payment
     */
    public function __construct(PaymentStrategy $payment)
    {
        $this->payment = $payment;
    }

    public function getPayment($data, $codeIdOnly, $domain)
    {
        return $this->payment->getPayment($data, $codeIdOnly, $domain);
    }
}