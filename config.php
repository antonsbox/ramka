<?php  

/**
* Configuration file
* Конфигурационный файл
* @author IT studio IRBIS-team
* @copyright © 2009 IRBIS-team
*/
/////////////////////////////////////////////////////////
   /**
   * Generation of page of an error at access out of system
   * Генерация страницы ошибки при доступе вне системы
   */
    if(!defined('IRB_KEY'))
    {
       header("HTTP/1.1 404 Not Found");     
       exit(file_get_contents('./404.html'));
    }
	
///////////////////////////////////////////////////////////////
//                  ADMINISTRATION
//                  АДМИНИСТРАЦИЯ
///////////////////////////////////////////////////////////////	

/** 
* Logins and passwords for an input in the administrator-panel 
* Логины и пароли для входа в админ-панель 
*/  
    $admins = array( 
                      'root'   => '63a9f0ea7bb98050796b649e85481845', // root => root  Изменить в релизе 
                      '123456' => 'e10adc3949ba59abbe56e057f20f883e', 
                    );
					   
///////////////////////////////////////////////////////////////
//                THE GENERAL OPTIONS
//                  ОбЩИЕ НАСТРОЙКИ
///////////////////////////////////////////////////////////////

/**
* Includes mod rewrite
* Включает модуль перенаправления 
*/
    define('IRB_REWRITE', 'on');    
/** 
* Choice of language of a site 
* Выбор языка сайта 
*/  
    define('IRB_LANGUAGE', 'ru');
	     
/** 
* Installation page  
* Установка страниц
*/      
    $CONFIG_SETTING = array(
                            'main'   => 'Главная страница', 
                            'second' => 'Вторая страница' ,     
                           );   
	
///////////////////////////////////////////////////////////////
//                OPTIONS OF CONNECTION WITH A DB
//                  НАСТРОЙКИ СОЕДИНЕНИЯ С БД
///////////////////////////////////////////////////////////////	
	
   /**
   * Database prefix.
   * Префикс таблиц БД.
   */   
   define('IRB_DBPREFIX', 'irbis_');
   
  /**
   * Database server.
   * Сервер БД.
   */   
   define('IRB_DBSERVER', 'localhost'); 
  
   /**
   * Database user.
   * Пользователь БД
   */ 
   define('IRB_DBUSER', 'root'); 
  
  /**
   * Database password.
   * Пароль БД
   */     
   define('IRB_DBPASSWORD', '');
  
  /**
   * Database name.
   * Название базы
   */ 
   define('IRB_DATABASE', 'basa'); 	
	
///////////////////////////////////////////////////////////////
//                       NOT TO CHANGE
//                        НЕ ИЗМЕНЯТЬ
///////////////////////////////////////////////////////////////  

	
/**
* Establishes a path to a script root for HTTP
* Устанавливает путь до корневой директории скрипта
* по протоколу HTTP
*/ 
    define('IRB_HOST', 'http://'. $_SERVER['HTTP_HOST'] .'/');
    
/**
* Establishes a physical path to a root directory of a script
* Устанавливает физический путь до корневой директории скрипта
*/ 
    define('IRB_ROOT', str_replace('\\', '/', $_SERVER['DOCUMENT_ROOT']) .'/'); 














