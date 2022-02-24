<?php

class lifesubCest
{
    public function _before(CyberchimpsTester $I)
    {
    }

    // tests
    public function tryToTest(CyberchimpsTester $I)
    {
        $I->amOnPage('/');
        $I->click('//*[@id="menu-1-4ba7cad"]/li[5]/a');
        $I->see('plans and pricing');
        $I->scrollTo('//*[@id="pricing-plans"]/div/div/div/div/div/div[2]/div/div/div[1]/div[2]/label/span');
        $I->wait(2);
        $I->click('//*[@id="pricing-plans"]/div/div/div/div/div/div[2]/div/div/div[1]/div[2]/label/span');
        $I->wait(3);
    }
}
