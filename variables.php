<?php 
/** 
* The block of initialization and processing of entering variables 
* Блок инициализации и обработки входящих переменных 
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
/////////////////////////////////////////////////////////

/**  
* We kill magic inverted commas  
* Убиваем магические кавычки  
*/          
    function stripslashesDeep($data)      
    {      
        if(is_array($data))       
            $data = array_map("stripslashesDeep", $data);       
        else     
            $data = stripslashes($data);       
        return $data;  
    }  

    if(get_magic_quotes_gpc())   
    {   
        $_GET = stripslashesDeep($_GET);    
        $_POST = stripslashesDeep($_POST);    
        $_COOKIE = stripslashesDeep($_COOKIE);   
    }  

/**   
* Array of variables for GET-parametres   
* Массив переменных для GET-параметров   
*/   
    $GET = array(   
                  'page' => 'main',   
                  'rem'  => 'read',   
                  'id'   => 0,   
                  'num'  => 0,   
                );   

/**   
* Initialization of variables GET-parametres   
* Инициализация переменных GET-параметров   
*/   
    if(IRB_REWRITE == 'on' && !empty($_GET['route']))   
    {   
        $get = explode('/', trim($_GET['route'], '/'));   
        $i = 0;   

        foreach($GET as $var => $val)   
        {   
            if(!empty($get[$i]))   
               $GET[$var] = $get[$i];   

            ++$i;   
        }   
    }   
    elseif(count($_GET))   
    {   
        foreach($GET as $var => $val)   
            if(!empty($_GET[$var]))   
                $GET[$var] = $_GET[$var];       
    }   
/**   
* Buttons   
* Кнопки   
*/    
    $ok   = !empty($_POST['ok'])?true:false;   
       
/**   
* Initialization of variables POST   
* Инициализация переменных POST   
*/    
    $POST = array(   
                            'value1'           =>  '',   
                            'value2'           =>  '',       
                            'value3'           =>  '', 
                            'value4'           =>  '',							  
                  );   
                     
    if(!empty($_POST['form']))
        $POST = array_merge($POST, $_POST['form']); 

/**   
* Other variables   
* Другие переменные   
*/     

   $error       = array();
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   