<?php
	
	namespace App\Models\Entities;

	class User
	{
		private $id_user;
		private $name_user;
		private $email_user;
		private $pass_user;
		private $type_user;
		private $status_user;

		### ID User ###
		public function getIdUser()
		{
			return $this->id_user;
		}

		public function setIdUser($id_user)
		{
			$this->id_user = $id_user;
		}

		### Name User ###
		public function getNameUser()
		{
			return $this->name_user;
		}

		public function setNameUser($name_user)
		{
			$this->name_user = $name_user;
		}

		### E-mail User ###
		public function getEmailUser()
		{
			return $this->email_user;
		}

		public function setEmailUser($email_user)
		{
			$this->email_user = $email_user;
		}

		### Password User ###
		public function getPassUser()
		{
			return $this->pass_user;
		}

		public function setPassUser($pass_user)
		{
			$this->pass_user = $pass_user;
		}

		### Type User ###
		public function getTypeUser()
		{
			return $this->type_user;
		}

		public function setTypeUser($type_user)
		{
			$this->type_user = $type_user;
		}

		### Status User ###
		public function getStatusUser()
		{
			return $this->status_user;
		}

		public function setStatusUser($status_user)
		{
			$this->status_user = $status_user;
		}
	}
