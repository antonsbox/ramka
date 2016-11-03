<?php
    
/** 
* Controller 
* Контроллер 
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

/** 
* We connect a file of the MySQL functions 
* Подключаем файл функций MySQL 
*/   
   include_once IRB_ROOT .'libs/mysql.php';  
    

    $res = mysqlQuery("SELECT *  
                       FROM `". IRB_DBPREFIX ."test`" 
                      ); 
                       
    $rows = ''; 
    $i    = 0; 
     
    if(mysql_num_rows($res) > 0) 
    { 
        $tpl = getTpl('second/price_rows');  
     
        while($row = htmlChars(mysql_fetch_assoc($res))) 
        { 
            ++$i; 
              $row['num'] = $i; 
              $rows .= parseTpl($tpl, $row);                 
        } 
    }