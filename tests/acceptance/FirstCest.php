<?php

class FirstCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function tryToTest(AcceptanceTester $I)
    {
		$I->amOnPage('');
		$I->seeElement('#homefeatured > li:nth-child(2) > div > div.left-block > div > a.product_img_link > img');
		$I->click('#homefeatured > li:nth-child(2) > div > div.left-block > div > a.quick-view');
		$I->seeElement('#product > div');
		$I->see('Blouse');
    }
}
