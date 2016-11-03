<?php
/** 
* Router 
* Роутер  
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
       exit(file_get_contents('../../404.html')); 
    }  
///////////////////////////////////////////////////////// 
/**  
* Подключаем контроллер главной страницы
* The controller of the main page includes 
*/  
    include './modules/main/read_controller.php'; 
	
/**  
* Подготовка к выводу 
* Preparation for a conclusion 
*/ 
    include './modules/main/view.php';



