<?php

require_once('PaymentStrategy.php');


class CaridPaymentStrategy implements PaymentStrategy
{
    /**
     * @param array $data
     * @return array
     */
    public function getPayment($data, $codeIdOnly, $domain)
    {
        $checkCodeIDOnly = $this->checkCodeIDOnly($codeIdOnly);
        $checkDomain = $this->checkDomain($domain);

        return $this->getArray($data, $checkCodeIDOnly, $checkDomain);
    }


    private function checkCodeIDOnly($codeIdOnly)
    {
        return $codeIdOnly == PaymentStrategy::CARID_ONLY_ACTIVE ? true: false;
    }

    private function checkDomain($domain)
    {
        return $domain == PaymentStrategy::CARID_DOMAIN ? true: false;
    }

    private function getArray($data, $checkCodeIDOnly, $checkDomain) {

        if ($checkCodeIDOnly && $checkDomain == true) {
            foreach ($data as $item) {

                if ($item[id] != PaymentStrategy::PAYMENT_ID) {
                    continue;
                }

                return [$item];
            }
        }

    }


}