<?php

	namespace App\Controllers;

	use App\Libs\Session;

	abstract class Controller
	{
		protected $app;
		private   $viewVar;

		// Função construtora
		public function __construct($app)
		{
			$this->setViewParam('nameController', $app->getControllerName());
			$this->setViewParam('nameAction',$app->getAction());
		}

		// Função que monta o layout da aplicação
		public function render($view)
		{
			$viewVar = $this->getViewVar();
			$Session  = Session::class;

			// Arquivos com as partes do layout da página
			require_once PATH . '/App/Views/layouts/header.php';
			require_once PATH . '/App/Views/layouts/menu.php';
        	require_once PATH . '/App/Views/' . $view . '.php';
        	require_once PATH . '/App/Views/layouts/footer.php';
		}

		public function redirect($view)
		{
			header('Location: http://' . APP_HOST . $view);
			exit;
		}

		public function getViewVar()
		{
			return $this->viewVar;
		}

		public function setViewParam($varName, $varValue)
		{
			if ($varName != "" && $varValue != "")
			{
				$this->viewVar[$varName] = $varValue;
			}
		}
	}
