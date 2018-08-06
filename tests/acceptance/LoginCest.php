<?php


class LoginCest
{

    public function successLoginTest(AcceptanceTester $I)
    {
        $I->wantTo('Verify if I can log in in to user panel');
        $I->amOnPage('/lt/login');
        $I->see('Prisijungti');

        $I->fillField('username','valid_user_name');
        $I->fillField('password','valid_password');
        $I->click('Prisijungti');

        $I->amOnPage('/lt/account-overview/');
    }

    public function unsuccessLoginTest(AcceptanceTester $I)
    {
        $I->wantTo('Verify if I can t login with wrong data ');
        $I->amOnPage('/lt/login');
        $I->see('Prisijungti');

        $I->fillField('username','wrong');
        $I->fillField('password','wrong');
        $I->click('Prisijungti');
        $I->wait(3);
        $I->see('Neteisingai įvesti duomenys');

    }
}
