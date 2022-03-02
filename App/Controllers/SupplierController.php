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

		public function success()
	    {
	        $this->render('/supplier/success');
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

		// Método de edição de cadastro de fornecedores
		public function toupdate()
		{
			$Supplier = new Supplier();
			
			$Supplier->setNameSupplier($_POST['name_supplier']);
			$Supplier->setSocialSupplier($_POST['social_supplier']);
			$Supplier->setAdressSupplier($_POST['adress_supplier']);
			$Supplier->setCitySupplier($_POST['city_supplier']);
			$Supplier->setStateSupplier($_POST['state_supplier']);
			$Supplier->setCnpjSupplier($_POST['cnpj_supplier']);
			$Supplier->setEmailSupplier($_POST['email_supplier']);
			$Supplier->setPhoneSupplier($_POST['phone_supplier']);

			Session::saveForm($_POST);

			$supplierValidation = new SupplierValidation();
			$resultValidation = $supplierValidation->validate($Supplier);

			if($resultValidation->getErros()){
				Session::saveError($resultValidation->getErros());
				$this->redirect('/supplier/edit/'. $_POST['id_supplier']);
			}

			$supplierDAO = new SupplierDAO();

			$supplierDAO->toupdate($Supplier);

			Session::clearForm();
			Session::clearMessage();
			Session::clearError();

			$this->redirect('/supplier');

		}

		// Método de renderização da view de exclusão do fornecedor
		public function delete($params)
		{
			$id_supplier = $params[0];

			$supplierDAO = new SupplierDAO();

			$supplier = $supplierDAO->list($id_supplier);

			if(!$supplier){
				Session::saveMessage("O fornecedor não existe!");
				$this->redirect('/supplier');
			}

			self::setViewParam('supplier', $supplier);

			$this->render('/supplier/delete');

			Session::clearMessage();

		}
		
		// Método de exclusão do fornecedor
		public function exclusion()
		{
			$Supplier = new Supplier();
			$Supplier->setIdSupplier($_POST['id_supplier']);

			$supplierDAO = new SupplierDAO();

			if(!$supplierDAO->exclusion($Supplier)){
				Session::saveMessage("O fornecedor não existe!");
				$this->redirect('/supplier');
			}

			Session::saveMessage("Fornecedor excluído com sucesso!");

			$this->redirect('/supplier');
		}
	}
