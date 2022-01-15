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

		}
	}
