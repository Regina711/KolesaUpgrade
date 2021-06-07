<?php

//use Page\Categories;

/**
 * Тест на проверку выбора 2 рандомных элементов из категорий на habr 
 * @group test
 * @param Example $data
 * @dataProvider getDataForCategory
 */
 
class Lesson7RandomCategoryCest
{
	
	public $categories = [
		'//li[@class="nav-links__item"]/a[@href="https://habr.com/ru/top/"]',
		'//li[@class="nav-links__item"]/a[@href="https://habr.com/ru/feed/"]',
		'//li[@class="nav-links__item"]/a[@href="https://habr.com/ru/flows/develop/"]',
		'//li[@class="nav-links__item"]/a[@href="https://habr.com/ru/flows/admin/"]',
		'//li[@class="nav-links__item"]/a[@href="https://habr.com/ru/flows/design/"]',
		'//li[@class="nav-links__item"]/a[@href="https://habr.com/ru/flows/management/"]',
		'//li[@class="nav-links__item"]/a[@href="https://habr.com/ru/flows/marketing/"]'
	];
	
	/*
	 * 
	 */
    public function chooseRandomCategories(AcceptanceTester $I)
    {
		foreach ($this->getDataForCategory() as $el) {
			$I->amOnPage('');
			//$I->waitForElementClickable(Categories::$categoryType);
			$I->click($this->categories[$el]);
			
			//$I->seeInCurrentUrl($data['url']);
			//$I->seeElement('#product > div');
			//$I->see($data['header']);
		}
		

    }
	
	
	protected function getDataForCategory()
	{
		return array_rand($this->categories, 2);
	}
}