
<?php
define("SERVIDOR", "localhost");
define("BANCO", "Contato");
define("USUARIO", "root");
define("SENHA", "");
define("CHARSET","UTF8");


define('CONTROLLER_PADRAO', 'home');
define('METODO_PADRAO', 'index');
define('NAMESPACE_CONTROLLER', 'app\\controllers\\');
define('TIMEZONE',"America/Fortaleza");
define('CAMINHO'            , realpath('./'));
define("TITULO_SITE","Contato");


define('URL_BASE', 'http://localhost/');
define('URL_IMAGEM', "http://localhost/app/upload/");

define("SESSION_LOGIN","usuario_logado");

$config_upload["verifica_extensao"] = false;
$config_upload["extensoes"]         = array(".gif",".jpeg", ".png", ".bmp", ".jpg");
$config_upload["verifica_tamanho"]  = true;
$config_upload["tamanho"]           = 3097152;
$config_upload["caminho_absoluto"]  = realpath('./'). '/app/upload/';
$config_upload["renomeia"]          = true;

#recaptcha
define("SITEKEY", "6LeqisoZAAAAAM3vBJYQjtZ9P8gyBdFeE0mbsorb");
define("SECRETKEY", "6LeqisoZAAAAALykk1VnViOydSPIPu9t6Gi6Dcii");