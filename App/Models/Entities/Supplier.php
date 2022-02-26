<?php
	
	namespace App\Models\Entities;

	class Supplier
	{
		private $id_supplier;
		private $name_supplier;
		private $social_supplier;
		private $adress_supplier;
		private $city_supplier;
		private $state_supplier;
		private $cnpj_supplier;
		private $email_supplier;
		private $phone_supplier;

		### ID Supplier ###
		public function getIdSupplier()
		{
			return $this->id_supplier;
		}

		public function setIdSupplier($id_supplier)
		{
			$this->$id_supplier = $id_supplier;
		}

		### Name Supplier ###
		public function getNameSupplier()
		{
			return $this->name_supplier;
		}

		public function setNameSupplier($name_supplier)
		{
			$this->name_supplier = $name_supplier;
		}

		### Social Supplier ###
		public function getSocialSupplier()
		{
			return $this->social_supplier;
		}

		public function setSocialSupplier($social_supplier)
		{
			$this->social_supplier = $social_supplier;
		}

		### Adress Supplier ###
		public function getAdressSupplier()
		{
			return $this->adress_supplier;
		}

		public function setAdressSupplier($adress_supplier)
		{
			$this->adress_supplier = $adress_supplier;
		}

		### City Supplier ###
		public function getCitySupplier()
		{
			return $this->city_supplier;
		}

		public function setCitySupplier($city_supplier)
		{
			$this->city_supplier = $city_supplier;
		}

		### State Supplier ###
		public function getStateSupplier()
		{
			return $this->state_supplier;
		}

		public function setStateSupplier($state_supplier)
		{
			$this->state_supplier = $state_supplier;
		}

		### CNPJ Supplier ###
		public function getCnpjSupplier()
		{
			return $this->cnpj_supplier;
		}

		public function setCnpjSupplier($cnpj_supplier)
		{
			$this->cnpj_supplier = $cnpj_supplier;
		}

		### E-mail Supplier ###
		public function getEmailSupplier()
		{
			return $this->email_supplier;
		}

		public function setEmailSupplier($email_supplier)
		{
			$this->email_supplier = $email_supplier;
		}

		### Phone Supplier ###
		public function getPhoneSupplier()
		{
			return $this->phone_supplier;
		}

		public function setPhoneSupplier($phone_supplier)
		{
			$this->phone_supplier = $phone_supplier;
		}
	}
