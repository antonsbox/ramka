<?php
/**   
* The administration panel (router)  
* Панель администрации (роутер)  
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
* We include buffering  
* Включаем буфферизацию  
*/   
    ob_start();      
    session_start(); 
/**   
* Debug   
* Дебаггер  
* @TODO To clean in release  
*/  
   define('IRB_TRACE', true);     
   include '../debug.php';  
    
 /**  
* Installation of a key of access to files  
* Установка ключа доступа к файлам  
*/  
   define('IRB_KEY', true); 
     
/** 
* The administrator-panel identifier 
* Идентификатор админ-панели 
*/    
   define('IRB_ADMIN', true); 
    
/** 
* We connect a configuration file 
* Подключаем конфигурационный файл 
*/        
   include '../config.php'; 
    
/** 
* We connect a file of the language 
* Подключаем языковой файл 
*/   
   include IRB_ROOT .'language/'. IRB_LANGUAGE .'.php';  
        
/** 
* We connect a file of initialization of variables 
* Подключаем файл инициализации переменных 
*/             
   include IRB_ROOT .'variables.php'; 
                 
/** 
* We connect a file of the general functions 
* Подключаем файл общих функций 
*/   
   include IRB_ROOT .'libs/default.php';  
     
/**  
* We connect a file of the views functions  
* Подключаем файл функций отображения 
*/    
    include IRB_ROOT .'libs/view.php'; 
     

    if(!empty($_SESSION['admin']))    
    {  
     
/**  
* The switch of modules  
* Переключатель страниц  
*/             
        switch($GET['page']) 
        { 
        
            case 'main':    
                include IRB_ROOT .'admin/main/router.php';            
            break; 

            case 'second':
                include IRB_ROOT .'admin/second/router.php'; 
            break; 

            case 'meta':
                include IRB_ROOT .'admin/meta/router.php'; 
            break; 

            case 'exit':
                include IRB_ROOT .'admin/sequrity/exit.php'; 
            break; 
					       
            default:
                include IRB_ROOT .'admin/main/router.php';
            break;    
        }  
    } 
    else 
        include IRB_ROOT .'admin/sequrity/enter.php'; 
    $content = ob_get_contents();  
    ob_end_clean();          
            
/**   
* Establish a path to the navigation menu   
* Устанавливаем путь до меню навигации   
*/   
    define('IRB_GENERAL_MENU',  IRB_ROOT .'skins/tpl/admin_menu.tpl');   

/**  
* Подключаем главный шаблон  
* Includes the basic template  
*/  
    include IRB_ROOT .'skins/tpl/index.tpl';

