<?php


interface PaymentStrategy
{
    const CARID_ONLY_ACTIVE = 1;
    const CARID_DOMAIN = 'carid.com';
    const PAYMENT_ID = 102;

    public function getPayment($data, $codeIdOnly, $domain);
}