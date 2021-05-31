<?php

class Lesson5AcceptanceCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function tryToTest(AcceptanceTester $I)
    {
		$blouseCardCss = '#homefeatured > li:nth-child(2)';
		$blouseCardXPath = '//li[@class='ajax_block_product col-xs-12 col-sm-4 col-md-3 last-item-of-mobile-line']';
		$quickViewCss = '#homefeatured > li:nth-child(2) a.quick-view';
		$quickViewXPath = '//a[@class='quick-view' and contains(@href, 'id_product=2&controller=product')]';
		$blouseModalWindowCss = '#product > div';
		$blouseModalWindowXPath = '//*[@id="product"]'; 
		$I->amOnPage('');
		$I->seeElement('#homefeatured > li:nth-child(2)');
		$I->click('#homefeatured > li:nth-child(2) a.product_img_link');
		$I->seeElement('#product > div');
		$I->see('Blouse');
    }
}
