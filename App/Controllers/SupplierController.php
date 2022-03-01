<?php

	namespace App\Controllers;

	use App\Libs\Session;
	use App\Models\Entities\Supplier;
	use App\Models\DAO\SupplierDAO;
	use App\Models\Validations\SupplierValidation;

	class SupplierController extends Controller
	{	
		public function index()
		{
			$supplierDAO = new SupplierDAO();

        	self::setViewParam('listSuppliers', $supplierDAO->list());

			$this->render('/supplier/index');

			Session::clearMessage();
		}

		// Método que renderiza a página de cadastro de novo fornecedor
		public function register()
		{
			$this->render('/supplier/register');

			Session::clearForm();
        	Session::clearMessage();
        	Session::clearError();
		}

		// Método que salva um novo cadastro de fornecedor
		public function save()
		{
			// Implementação do método de salvar
			$supplier = new Supplier();
			
			$supplier->setNameSupplier($_POST['name_supplier']);
			$supplier->setSocialSupplier($_POST['social_supplier']);
			$supplier->setAdressSupplier($_POST['adress_supplier']);
			$supplier->setCitySupplier($_POST['city_supplier']);
			$supplier->setStateSupplier($_POST['state_supplier']);
			$supplier->setCnpjSupplier($_POST['cnpj_supplier']);
			$supplier->setEmailSupplier($_POST['email_supplier']);
			$supplier->setPhoneSupplier($_POST['phone_supplier']);
			
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

		// Método de recuperação da view de edição do fornecedor
		public function edit($params)
		{
			$id_supplier = $params[0];

			$supplierDAO = new SupplierDAO();

			$supplier = $supplierDAO->list($id_supplier);
			
			if(!$supplier){
				Session::saveMessage("O fornecedor não existe!");
				$this->redirect('/product');
			}
			
			self::setViewParam('supplier', $supplier);

			$this->render('/supplier/edit');

			Session::clearMessage();

		}

		

		public function success()
	    {
	        $this->render('/supplier/success');
	    }
	}
