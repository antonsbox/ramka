<?php
/**  
* The main router 
* Главный маршрутизатор (роутер) 
* @author IT studio IRBIS-team 
* @copyright © 2009 IRBIS-team 
*/ 
///////////////////////////////////////////////////////// 

/** 
* We establish the charset and level of errors 
* Устанавливаем кодировку и уровень ошибок 
*/ 
    header("Content-Type: text/html; charset=utf-8"); 
    error_reporting(E_ALL); 
 
/** 
* Installation of a key of access to files 
* Установка ключа доступа к файлам 
*/ 
    define('IRB_KEY', true);
    
/**  
* Debug  
* Дебаггер 
* @TODO To clean in release 
*/ 
   define('IRB_TRACE', true);    
   include './debug.php';
    
/**
* We connect a configuration file
* Подключаем конфигурационный файл
*/
    include './config.php'; 

/**
* We connect a file of the language
* Подключаем языковой файл
*/
    include './language/'. IRB_LANGUAGE .'.php';
	
/**
* Получаем файл переменных 
* Receive a variables file 
*/
    include './variables.php';
	
/**
* We connect a file of the general functions
* Подключаем файл общих функций
*/ 
    include './libs/default.php';
	
/**
* We put in order a conclusion
* Приводим в порядок вывод
*/ 
    include './libs/view.php';
	
	
    ob_start();  

/**
* The switch of modules
* Переключатель страниц
*/      
    switch($GET['page']) 
    { 
/**  
* Подключаем модуль приветствия  
* Includes the greeting module  
*/         
        case 'main':    
            include './modules/main/router.php';            
        break; 
/**  
* Подключаем модуль второй страницы  
* Includes the module of the second page  
*/ 
        case 'second':
            include './modules/second/router.php'; 
        break; 
/**  
* Подключаем модуль приветствия по умолчанию 
* Includes the greeting module  
*/           
        default:
            include './modules/main/router.php';
        break;    
    }  

    $content = ob_get_contents();  
    ob_end_clean(); 
	
/**   
* Establish a path to the navigation menu   
* Устанавливаем путь до меню навигации   
*/   
    define('IRB_GENERAL_MENU',  './skins/tpl/menu.tpl'); 	
	 
/**  
* Подключаем главный шаблон  
* Includes the basic template  
*/  
    include './skins/tpl/index.tpl';

