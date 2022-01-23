<?php
	
	namespace App\Models\Entities;

	class Supplier
	{
		private $idSupplier;
		private $nameSupplier;
		private $socialSupplier;
		private $adressSupplier;
		private $citySupplier;
		private $stateSupplier;
		private $cnpjSupplier;
		private $emailSupplier;
		private $phoneSupplier;

		### ID Supplier ###
		public function getIdSupplier()
		{
			return $this->idSupplier;
		}

		public function setIdSupplier($idSupplier)
		{
			$this->$idSupplier = $idSupplier;
		}

		### Name Supplier ###
		public function getNameSupplier()
		{
			return $this->nameSupplier;
		}

		public function setNameSupplier($nameSupplier)
		{
			$this->nameSupplier = $nameSupplier;
		}

		### Social Supplier ###
		public function getSocialSupplier()
		{
			return $this->socialSupplier;
		}

		public function setSocialSupplier($socialSupplier)
		{
			$this->socialSupplier = $socialSupplier;
		}

		### Adress Supplier ###
		public function getAdressSupplier()
		{
			return $this->adressSupplier;
		}

		public function setAdressSupplier($adressSupplier)
		{
			$this->adressSupplier = $adressSupplier;
		}

		### City Supplier ###
		public function getCitySupplier()
		{
			return $this->citySupplier;
		}

		public function setCitySupplier($citySupplier)
		{
			$this->citySupplier = $citySupplier;
		}

		### State Supplier ###
		public function getStateSupplier()
		{
			return $this->stateSupplier;
		}

		public function setStateSupplier($stateSupplier)
		{
			$this->stateSupplier = $stateSupplier;
		}

		### CNPJ Supplier ###
		public function getCnpjSupplier()
		{
			return $this->cnpjSupplier;
		}

		public function setCnpjSupplier($cnpjSupplier)
		{
			$this->cnpjSupplier = $cnpjSupplier;
		}

		### E-mail Supplier ###
		public function getEmailSupplier()
		{
			return $this->emailSupplier;
		}

		public function setEmailSupplier($emailSupplier)
		{
			$this->emailSupplier = $emailSupplier;
		}

		### Phone Supplier ###
		public function getPhoneSupplier()
		{
			return $this->phoneSupplier;
		}

		public function setPhoneSupplier($phoneSupplier)
		{
			$this->phoneSupplier = $phoneSupplier;
		}
	}
