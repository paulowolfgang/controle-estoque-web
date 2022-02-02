<?php

	namespace App\Controllers;

	use App\Libs\Session;
	use App\Models\DAO\UserDAO;
	use App\Models\Entities\User;
	use App\Models\Validations\UserValidation;

	class UserController extends Controller
	{	
		public function index()
		{
			$this->redirect('/user/index');
		}

		// Método que renderiza a página de cadastro de novo usuário
		public function register()
		{
			$this->render('/user/register');

			Session::clearForm();
        	Session::clearMessage();
        	Session::clearError();
		}

		// Método que salva um novo cadastro de usuário
		public function save()
		{
			$user = new User();
			
			$user->setNameUser($_POST['nameUser']);
			$user->setEmailUser($_POST['emailUser']);
			$user->setPassUser($_POST['passUser']);
			$user->setTypeUser($_POST['typeUser']);
			$user->setStatusUser($_POST['statusUser']);
			
			/*
			echo "<pre>";
				echo var_dump($user);
			echo "</pre>";
			*/

			Session::saveForm($_POST);

			// Validação dos Campos do Formulário
			$userValidation = new UserValidation();
	        $resultValidation = $userValidation->validate($user);

	        if($resultValidation->getErros()){
	            Session::saveError($resultValidation->getErros());
	            $this->redirect('/user/register');
	        }
			
			$userDAO = new UserDAO();

			if($userDAO->checksEmail($_POST['emailUser'])){
	            Session::saveMessage("E-mail não disponível!");
	            $this->redirect('/user/register');
	        }

			if($userDAO->save($user))
			{
				$this->redirect('/user/success');
			}else{
				//Lógica de tratamento de erro (Sessão)
			}
		}
		
		public function success()
	    {
	        if(Session::returnValueForm('nameUser')) {
	            $this->render('/user/success');

	            Session::clearForm();
	            Session::clearMessage();
	        }else{
	            $this->redirect('/');
	        }
	    }
	}
