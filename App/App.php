<?php

	namespace App;

	use App\Controllers\HomeController;
	use Exception;

	class App
	{
		private $controller;
		private $controllerFile;
		private $controllerName;
		private $params;
		private $action;

		public function __construct()
		{
			/*
			* Constantes do sistema
			*/
			define('APP_HOST'    , $_SERVER['HTTP_HOST'] . "/controle_estoque_app");
        	define('PATH'        , realpath('./'));
        	define('TITLE'       , "Sistema de Controle de Estoque");
        	define('DB_HOST'     , "localhost");
        	define('DB_NAME'     , "db_estoque");
        	define('DB_USER'     , "root");
        	define('DB_PASSWORD' , "");
        	define('DB_DRIVER'   , "mysql");

        	$this->url();
		}

		public function run()
		{
			

		}
	}
