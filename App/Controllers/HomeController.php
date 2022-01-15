<?php
	
	namespace App\Controllers;

	// Método que renderiza o dashboard da aplicação
	class HomeController extends Controller
	{
		public function index()
		{
			$this->render('home/index');
		}
	}
	