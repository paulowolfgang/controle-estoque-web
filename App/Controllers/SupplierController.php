<?php

	namespace App\Controllers;

	//use App\Libs\Sessao;
	use App\Models\DAO\SupplierDAO;
	use App\Models\Entities\Supplier;

	class SupplierController extends Controller
	{	
		// Método que renderiza a página de cadastro de novo usuário
		public function register()
		{
			$this->render('/supplier/register');
		}

		// Método que salva um novo cadastro de usuário
		public function save()
		{
			// Implementação do método de salvar
			$supplier = new Supplier();
			
			$supplier->setNameSupplier($_POST['nameSupplier']);
			$supplier->setSocialSupplier($_POST['socialSupplier']);
			$supplier->setAdressSupplier($_POST['adressSupplier']);
			$supplier->setCitySupplier($_POST['citySupplier']);
			$supplier->setStateSupplier($_POST['stateSupplier']);
			$supplier->setCnpjSupplier($_POST['cnpjSupplier']);
			$supplier->setEmailSupplier($_POST['emailSupplier']);
			$supplier->setPhoneSupplier($_POST['phoneSupplier']);
			
			/*
			echo "<pre>";
				echo var_dump($supplier);
			echo "</pre>";
			*/
			
			$supplierDAO = new SupplierDAO();
			
			if($supplierDAO->save($supplier))
			{
				$this->redirect('/supplier/success');
			}else{
				//Lógica de tratamento de erro (Sessão)
			}
		}
		
		public function success()
	    {
	        $this->render('/supplier/success');
	    }

		public function index()
		{
			$this->redirect('/supplier/register');
		}
	}
