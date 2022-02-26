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

		// Renderização da página de cadastro de novo produto
		public function register()
		{
			$this->render('/product/register');

			Session::clearForm();
        	Session::clearMessage();
        	Session::clearError();
		}

		// Método que salva um novo cadastro de produto
		public function save()
		{
			// Implementação do método de salvar
			$product = new Product();
			
			$product->setRefProduct($_POST['ref_product']);
			$product->setNameProduct($_POST['name_product']);
			$product->setDescriptionProduct($_POST['description_product']);
			$product->setCostPriceProduct($_POST['cost_price_product']);
			$product->setSalePriceProduct($_POST['sale_price_product']);
			$product->setStockProduct($_POST['stock_product']);
			$product->setCategoryProduct($_POST['category_product']);
			
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
	