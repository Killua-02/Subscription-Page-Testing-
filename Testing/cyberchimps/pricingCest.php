<?php

class pricingCest
{
    public function _before(CyberchimpsTester $I)
    {
    }

    // tests
    public function tryToTest(CyberchimpsTester $I)
    {
        $I->amOnPage('/');
        $I->click('//*[@id="menu-1-4ba7cad"]/li[5]/a');
        $I->amOnPage('/pricing');
    }
}
