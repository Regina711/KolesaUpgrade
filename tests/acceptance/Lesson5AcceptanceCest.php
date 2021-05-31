<?php

class Lesson5AcceptanceCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function tryToTest(AcceptanceTester $I)
    {
		$I->amOnPage('');
		$I->seeElement('#homefeatured > li:nth-child(2)');
		$I->click('#homefeatured > li:nth-child(2) a.product_img_link');
		$I->seeElement('#product > div');
		$I->see('Blouse');
    }
}
