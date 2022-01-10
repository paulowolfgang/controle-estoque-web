<?php

	namespace App;

	use App\Controllers\HomeController;
	use Exception;

	class App
	{
		public $controllerName;
		private $controller; 
		private $controllerFile;
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

		public function url ()
		{
	        if (isset($_GET['url']))
	        {
	        	$path = $_GET['url'];
	            $path = rtrim($path, '/');
	            $path = filter_var($path, FILTER_SANITIZE_URL); 

	            $path = explode('/', $path);

	            $this->controller  = $this->verificaArray($path, 0); //Posição do controller
	            $this->action      = $this->verificaArray($path, 1); //Posição da ação

	            if ($this->verificaArray($path, 2)) //Posição dos parâmetros
	            {
	                unset($path[0]);
	                unset($path[1]);
	                $this->params = array_values($path);
	            }
	        }
    	}
	}
