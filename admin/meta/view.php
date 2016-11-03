<?php

/** 
* View 
* Отображение 
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
/////////////////////////////////////////////////////////// 

// Если метаданные еще не установлены, берем начальные значения из языкового файла 
    $POST['value1'] = !empty($meta[$GET['rem']]['title']) ?       $meta[$GET['rem']]['title'] : IRB_LAND_NO_TITLE;      
    $POST['value2'] = !empty($meta[$GET['rem']]['keywords']) ?    $meta[$GET['rem']]['keywords'] : IRB_LANG_NO_KEYWORDS; 
    $POST['value3'] = !empty($meta[$GET['rem']]['description']) ? $meta[$GET['rem']]['description'] : IRB_LANG_NO_DESCRIPTION;
  
// Название текущего  модуля    
    $modul  = getModul();
// Меню 
    $menu   = getMenu();

    $POST = htmlChars($POST); 
/** 
* Подключаем шаблон  
* Includes the template  
*/  
    include IRB_ROOT .'skins/tpl/admin/meta/show.tpl';

	
