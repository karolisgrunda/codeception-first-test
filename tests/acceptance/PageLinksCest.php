<?php
use \Codeception\Util\Locator;

class PageLinksCest
{
    public function homePageLinkTest(AcceptanceTester $I)
    {
        $I->wantTo('Verify if i see home page link');
        $I->amOnPage('/lt/login');
        $I->seeLink('Grįžti į titulinį', 'https://www.paysera.lt');


        $I->seeElement(Locator::href('https://www.paysera.lt'));
    }

    public function registrationLinkTest(AcceptanceTester $I)
    {
        $I->wantTo('Verify if i see registration link');
        $I->amOnPage('/lt/login');

        $aLinks = $I->grabMultiple('a');
        $hrefLinks = $I->grabMultiple('a', 'href');
        for($x = 0; $x < count($aLinks); $x++) {
            print $aLinks[$x] . ' ' . $hrefLinks[$x];
            print "\n";
        }




        $I->wait(3);
        $I->seeLink('REGISTRACIJA', '/lt/registration');
    }

    public function resetPasswordLinkTest(AcceptanceTester $I)
    {
        $I->wantTo('Verify if i see reset password link');
        $I->amOnPage('/lt/login');
        $I->seeLink('Pamiršote slaptažodį?', '/lt/reset-password');
        $I->seeElement(Locator::href('/lt/reset-password'));
    }
    public function privacyPoliticsLinkTest(AcceptanceTester $I)
    {
        $I->wantTo('Verify if i see privacy politics link');
        $I->amOnPage('/lt/login');
        $I->seeLink('Privatumo politika', 'https://www.paysera.lt/v2/lt/sutartys/privatumo-politika');
        $I->seeElement(Locator::href('https://www.paysera.lt/v2/lt/sutartys/privatumo-politika'));
    }
    public function contractsLinkTest(AcceptanceTester $I)
    {
        $I->wantTo('Verify if i see contract link');
        $I->amOnPage('/lt/login');
        $I->seeLink('Paslaugų sutartys', 'https://www.paysera.com/v2/lt/sutartys');
        $I->seeElement(Locator::href('https://www.paysera.com/v2/lt/sutartys'));
    }
    public function safetyRecommendationsLinkTest(AcceptanceTester $I)
    {
        $I->wantTo('Verify if i see safety recommendations link');
        $I->amOnPage('/lt/login');
        $I->seeLink('Saugaus naudojimosi rekomendacijos', 'https://www.paysera.com/v2/lt/sutartys/saugumo-rekomendacijos');
        $I->seeElement(Locator::href('https://www.paysera.com/v2/lt/sutartys/saugumo-rekomendacijos'));
    }
    public function lithuaniaBankLinkTest(AcceptanceTester $I)
    {
        $I->wantTo('Verify if i see lithuania bank link');
        $I->amOnPage('/lt/login');
        $I->seeLink('Lietuvos Bankas', 'https://www.lb.lt/lt/finansu-rinku-dalyviai/paysera-lt-uab');
        $I->seeElement(Locator::href('https://www.lb.lt/lt/finansu-rinku-dalyviai/paysera-lt-uab'));
    }
}
