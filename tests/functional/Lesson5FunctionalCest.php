<?php

class Lesson5FunctionalCest
{
    public function _before(FunctionalTester $I)
    {
    }

    // tests
    public function tryToTest(FunctionalTester $I)
    {
		$I->amOnPage('');
		$I->fillField('#search_query_top', 'Printed dress');
		$I->click('button[name="submit_search"]');
		$I->seeElement('.product-count');
		$I->see(' 5 items');
    }
}
