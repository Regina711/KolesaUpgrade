<?php

use Page\Categories;

/**
 * Тест на проверку выбора 2 рандомных элементов из категорий на habr 
 * @group test
 * @param Example $data
 * @dataProvider getDataForCategory
 */
 
class Lesson7RandomCategoryCest
{
	/*
	 * 
	 */
    public function chooseRandomCategories(AcceptanceTester $I)
    {
		$I->amOnPage('');
		$I->waitForElementClickable(Categories::$categoryType);
		$I->click(sprintf(Categories::$categoryType, $data['categoryType']));
		$I->seeInCurrentUrl($data['url']);
		$I->seeElement('#product > div');
		$I->see($data['header']);
    }
	
	protected function getDataForCategory()
	{
		return [
			['category' => '', 'url' => ''],
			['category' => '', 'url' => ''],
			['category' => '', 'url' => ''],
			['category' => '', 'url' => ''],
			['category' => '', 'url' => ''],
			['category' => '', 'url' => ''],
			['category' => '', 'url' => ''],
			['category' => '', 'url' => '']
			
		];
	}
}

