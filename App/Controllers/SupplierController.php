<?php

	namespace App\Controllers;

	use App\Libs\Session;
	use App\Models\DAO\SupplierDAO;
	use App\Models\Entities\Supplier;
	use App\Models\Validations\SupplierValidation;

	class SupplierController extends Controller
	{	
		public function index()
		{
			$this->redirect('/supplier/register');
		}

		// Método que renderiza a página de cadastro de novo usuário
		public function register()
		{
			$this->render('/supplier/register');

			Session::clearForm();
        	Session::clearMessage();
        	Session::clearError();
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

			Session::saveForm($_POST);

			// Validação dos Campos do Formulário
			$supplierValidation = new SupplierValidation();
	        $resultValidation = $supplierValidation->validate($supplier);

	        if($resultValidation->getErros()){
	            Session::saveError($resultValidation->getErros());
	            $this->redirect('/supplier/register');
	        }
			
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
	}
