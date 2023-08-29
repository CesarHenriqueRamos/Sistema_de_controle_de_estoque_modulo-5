<?php
session_start();
date_default_timezone_set('America/Sao_Paulo');
$autoload = function($class){
    if($class == 'Email'){
        require_once('classes/phpmailer/PHPMailerAutoLoad.php');
    }
    include('../../classes/'.$class.'.php');
};

spl_autoload_register($autoload);
define('INCLUDE_PATH','http://localhost/Sistema_de_controle_financeiro_modulo-4/');
define('INCLUDE_PATH_PAINEL',INCLUDE_PATH.'painel/');

define('BASE_DIR_PAINEL',__DIR__.'/painel');

//Conectar com banco de dados!
define('HOST','localhost');
define('USER','root');
define('PASS','');
define('DB','db_controle_finaceiro');

?>