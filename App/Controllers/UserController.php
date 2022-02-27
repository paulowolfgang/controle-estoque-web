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
			$userDAO = new UserDAO();

        	self::setViewParam('listUsers', $userDAO->list());

			$this->render('/user/index');

			Session::clearMessage();
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
			
			$user->setNameUser($_POST['name_user']);
			$user->setEmailUser($_POST['email_user']);
			$user->setPassUser($_POST['pass_user']);
			$user->setTypeUser($_POST['type_user']);
			$user->setStatusUser($_POST['status_user']);
			
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

			if($userDAO->checksEmail($_POST['email_user'])){
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
	        if(Session::returnValueForm('name_user')) {
	            $this->render('/user/success');

	            Session::clearForm();
	            Session::clearMessage();
	        }else{
	            $this->redirect('/');
	        }
	    }
	}
