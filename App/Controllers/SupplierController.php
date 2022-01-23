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
