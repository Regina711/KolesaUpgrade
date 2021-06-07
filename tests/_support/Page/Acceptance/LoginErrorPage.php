<?php
namespace Page\Acceptance;

/**
  * Страница авторизации
 **/
 
class LoginErrorPage
{
	// Стандартный юзернейм заблокированного пользователя
	public const USERNAME = 'locked_out_user';
	
	// Стандартный пароль
	public const PASSWORD = 'secret_sauce';
	
    // Урл страницы авторизации
    public static $URL = '';
	
	//Селектор поля ввода для логина
	public static $loginInput = '//input[@id="user-name"]';
	
	//Селектор поля ввода для пароля
	public static $passwordInput = '//input[@id="password"]';

	//Селектор кнопки авторизации
	public static $loginButton = '//input[@id="login-button"]';
	
	//Селектор сообщения с ошибкой
	public static $errorMessage = '//div[@class="error-message-container error"]';
	
	//Селектор кнопки закрытия ошибки
	public static $errorButton = '//button[@class="error-button"]';
	
    /**
     * Объект Tester-а
     */
    protected $acceptanceTester;

    /**
     * Метод-конструктор
     */
    public function __construct(\AcceptanceTester $I)
    {
        $this->acceptanceTester = $I;
    }

    /**
     * Закрывает сообщение с ошибкой
     */
    public function closeErrorMessage()
    {
        $this->acceptanceTester->click(self::$errorButton);
    }

}
