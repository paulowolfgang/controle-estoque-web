<?php

	namespace App\Controllers;

	//use App\Libs\Sessao;
	use App\Models\DAO\ProductDAO;
	use App\Models\Entities\Product;

	class ProductController extends Controller
	{	
		// Método que renderiza a página de cadastro de novo usuário
		public function register()
		{
			$this->render('/product/register');
		}

		// Método que salva um novo cadastro de usuário
		public function save()
		{
			// Implementação do método de salvar
			$supplier = new Product();
			
			/*
			echo "<pre>";
				echo var_dump($supplier);
			echo "</pre>";
			*/
			
		}
		
		public function success()
	    {
	        $this->render('/product/success');
	    }

		public function index()
		{
			$this->redirect('/product/register');
		}
	}
