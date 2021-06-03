<?php

class Lesson5FunctionalCest
{
    public function _before(FunctionalTester $I)
    {
    }

    // tests
    public function tryToTest(FunctionalTester $I)
    {
		$searchFieldCss = '#search_query_top';
		$searchFieldXPath = '//*[@id="search_query_top"]';
		$searchButtonCss = 'button[name="submit_search"]';
		$searchButtonXPath = '//button[@name="submit_search"]';
		$productCountCss = '.product-count';
		$productCountXPath = '//div[@class="product-count"]'; 
		$I->amOnPage('');
		$I->fillField('#search_query_top', 'Printed dress');
		$I->click('button[name="submit_search"]');
		$I->seeElement('.product-count');
		$I->see(' 5 items');
    }
}
