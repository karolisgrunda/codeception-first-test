<?php


class PageContentCest
{

    public function imagesTest(AcceptanceTester $I)
    {
        $I->seeImageWithSource('/pixel.jpg')
    }
}
