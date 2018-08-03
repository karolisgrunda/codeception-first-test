<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('verify that the login page is working');

$I->amOnPage('/lt/login');
$I->see('Prisijungti');