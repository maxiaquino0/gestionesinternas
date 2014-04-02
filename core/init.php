<?php
 
define('URL_BASE','http://localhost/gestionesinternas/');
 
$GLOBALS['config'] = array(
         
        'path' => array(
            'root' => realpath(dirname(__FILE__)) . '/../',
            'class' => 'classes/'
        ),
 
/*
        'mysql' => array(
            'host' => 'mysql.hostinger.com.ar',
            'user' => 'u136914734_maxi',
            'password' => 'maxi18091989',
            'db' => 'u136914734_gest',
            'engine' => 'mysql'
        )
 */

        'mysql' => array(
            'host' => 'localhost',
            'user' => 'root',
            'password' => '',
            'db' => 'gestionesinternas',
            'engine' => 'mysql'
        )
             
    );
//lo que esta entre parentesis se llama funcion anonima
spl_autoload_register( function($class){
	if ( file_exists('classes/' . $class . '.php') ) {
		require_once 'classes/' . $class . '.php';
	}
}  );