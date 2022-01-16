<?php

	namespace App\Controllers;

	//use App\Libs\Sessao;
	use App\Models\DAO\UserDAO;
	use App\Models\Entities\User;

	class UserController extends Controller
	{	
		// Método que renderiza a página de cadastro de novo usuário
		public function register()
		{
			$this->render('/user/register');
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
			
			$userDAO = new UserDAO();

			if($userDAO->save($user))
			{
				$this->redirect('/user/success');
			}else{
				//Lógica de tratamento de erro (Sessão)
			}
		}
		
		public function success()
	    {
	        $this->render('/user/success');
	    }

		public function index()
		{
			$this->redirect('/user/register');
		}
	}
