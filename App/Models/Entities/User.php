<?php
	
	namespace App\Models\Entities;

	class User
	{
		private $idUser;
		private $nameUser;
		private $emailUser;
		private $passUser;
		private $typeUser;
		private $statusUser;

		### ID User ###
		public function getIdUser()
		{
			return $this->idUser;
		}

		public function setIdUser($idUser)
		{
			$this->idUser = $idUser;
		}

		### Name User ###
		public function getNameUser()
		{
			return $this->nameUser;
		}

		public function setNameUser($nameUser)
		{
			$this->nameUser = $nameUser;
		}

		### E-mail User ###
		public function getEmailUser()
		{
			return $this->emailUser;
		}

		public function setEmailUser($emailUser)
		{
			$this->emailUser = $emailUser;
		}

		### Password User ###
		public function getPassUser()
		{
			return $this->passUser;
		}

		public function setPassUser($passUser)
		{
			$this->passUser = $passUser;
		}

		### Type User ###
		public function getTypeUser()
		{
			return $this->typeUser;
		}

		public function setTypeUser($typeUser)
		{
			$this->typeUser = $typeUser;
		}

		### Status User ###
		public function getStatusUser()
		{
			return $this->statusUser;
		}

		public function setStatusUser($statusUser)
		{
			$this->statusUser = $statusUser;
		}
	}
