<?php

	namespace App\Controllers;

	//use App\Libs\Sessao;
	use App\Models\DAO\ProductDAO;
	use App\Models\Entities\Product;

	class ProductController extends Controller
	{	
		public function index()
		{
			$this->redirect('/product/register');
		}

		// Renderização da página de cadastro de novo usuário
		public function register()
		{
			$this->render('/product/register');
		}

		// Renderização da página de sucesso de cadastro
		public function success()
	    {
	        $this->render('/product/success');
	    }

		// Método que salva um novo cadastro de usuário
		public function save()
		{
			// Implementação do método de salvar
			$product = new Product();
			
			$product->setRefProduct($_POST['refProduct']);
			$product->setNameProduct($_POST['nameProduct']);
			$product->setDescriptionProduct($_POST['descriptionProduct']);
			$product->setCostPriceProduct($_POST['costPriceProduct']);
			$product->setSalePriceProduct($_POST['salePriceProduct']);
			$product->setStockProduct($_POST['stockProduct']);
			$product->setCategoryProduct($_POST['categoryProduct']);
			
			/*
			echo "<pre>";
				echo var_dump($product);
			echo "</pre>";
			*/

			$productDAO = new ProductDAO();
			
			if($productDAO->save($product))
			{
				$this->redirect('/product/success');
			}else{
				//Lógica de tratamento de erro (Sessão)
			}
		}
	}
