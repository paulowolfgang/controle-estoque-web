<?php

	namespace App\Controllers;

	use App\Libs\Session;
	use App\Models\DAO\ProductDAO;
	use App\Models\Entities\Product;
	use App\Models\Validations\ProductValidation;

	class ProductController extends Controller
	{	
		public function index()
		{
			$productDAO = new ProductDAO();

        	self::setViewParam('listProducts', $productDAO->list());

			$this->render('/product/index');

			Session::clearMessage();
		}

		// Renderização da página de cadastro de novo usuário
		public function register()
		{
			$this->render('/product/register');

			Session::clearForm();
        	Session::clearMessage();
        	Session::clearError();
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

			Session::saveForm($_POST);

			// Validação dos Campos do Formulário
			$productValidation = new ProductValidation();
	        $resultValidation = $productValidation->validate($product);

	        if($resultValidation->getErros()){
	            Session::saveError($resultValidation->getErros());
	            $this->redirect('/product/register');
	        }

	        // Registro no Banco de Dados
			$productDAO = new ProductDAO();
			
			if($productDAO->save($product))
			{
				$this->redirect('/product/success');
			}else{
				//Lógica de tratamento de erro (Sessão)
			}
		}

		// Renderização da página de sucesso de cadastro
		public function success()
	    {
	        $this->render('/product/success');
	    }
	}
