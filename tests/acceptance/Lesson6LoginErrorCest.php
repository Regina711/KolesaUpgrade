<?php

use Page\Acceptance\LoginErrorPage;
/**
 * Класс для проверки закрытия блока с ошибкой при неудачной авторизации
 */
 
class Lesson6LoginErrorCest
{
	/*
	 *Проверяет закрытие блока с ошибкой при неудачной авторизации
	 */
    public function checkLoginError(AcceptanceTester $I)
    {
		$loginErrorPage = new LoginErrorPage($I);
		$I->amOnPage(LoginErrorPage::$URL);
		$I->fillField(LoginErrorPage::$loginInput, LoginErrorPage::USERNAME);
		$I->fillField(LoginErrorPage::$passwordInput, LoginErrorPage::PASSWORD);
		$I->click(LoginErrorPage::$loginButton);
		$I->seeElement(LoginErrorPage::$errorMessage);
		$loginErrorPage->closeErrorMessage();
		$I->dontSeeElement(LoginErrorPage::$errorMessage);
    }
}
