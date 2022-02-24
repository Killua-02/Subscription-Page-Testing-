<?php

class prolifeCest
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
        $I->click('//*[@id="pricing-plans"]/div/div/div/div/div/div[2]/div/div/div[2]/div[2]/div/div/section/div/div/div[3]/div/div/div/div/div[1]/div[3]/a');
        $I->see('$299.00');
        $I->scrollTo('//*[@id="place_order"]');
        $I->wait(2);
        $I->selectOption('//*[@id="payment_method_stripe"]', 'stripe');
        $I->wait(2);
        $I->switchToIFrame('//*[@id="stripe-card-element"]/div/iframe');
        $I->fillField('//*[@id="root"]/form/span[2]/div/div[2]/span/input', '1234123412341234');
        $I->wait(1);
        $I->switchToIFrame();
        $I->switchToIFrame('//*[@id="stripe-exp-element"]/div/iframe');
        $I->fillField('//*[@id="root"]/form/span[2]/span/input', '1122');
        $I->wait(1);
        $I->switchToIFrame();
        $I->switchToIFrame('//*[@id="stripe-cvc-element"]/div/iframe');
        $I->fillField('//*[@id="root"]/form/span[2]/span/input', '1122');
        $I->wait(1);
        $I->switchToIFrame();
        $I->click('//*[@id="place_order"]');
        $I->wait(1);
    }
}
