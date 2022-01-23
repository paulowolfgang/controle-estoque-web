<?php
	
	namespace App\Models\Entities;

	class Product
	{
		private $idProduct;
		private $refProduct;
		private $nameProduct;
		private $descriptionProduct;
		private $costPriceProduct;
		private $salePriceProduct;
		private $stockProduct;
		private $categoryProduct;

		### ID Product ###
		public function getIdProduct()
		{
			return $this->idProduct;
		}

		public function setIdProduct($idProduct)
		{
			$this->idProduct = $idProduct;
		}

		### References Product ###
		public function getRefProduct()
		{
			return $this->refProduct;
		}

		public function setRefProduct($refProduct)
		{
			$this->refProduct = $refProduct;
		}

		### Name Product ###
		public function getNameProduct()
		{
			return $this->nameProduct;
		}

		public function setNameProduct($nameProduct)
		{
			$this->nameProduct = $nameProduct;
		}

		### Description Product ###
		public function getDescriptionProduct()
		{
			return $this->descriptionProduct;
		}

		public function setDescriptionProduct($descriptionProduct)
		{
			$this->descriptionProduct = $descriptionProduct;
		}

		### Cost Price Product ###
		public function getCostPriceProduct()
		{
			return $this->costPriceProduct;
		}

		public function setCostPriceProduct($costPriceProduct)
		{
			$this->costPriceProduct = $costPriceProduct;
		}

		### Sale Price Product ###
		public function getSalePriceProduct()
		{
			return $this->salePriceProduct;
		}

		public function setSalePriceProduct($salePriceProduct)
		{
			$this->salePriceProduct = $salePriceProduct;
		}

		### Stock Product ###
		public function getStockProduct()
		{
			return $this->stockProduct;
		}

		public function setStockProduct($stockProduct)
		{
			$this->stockProduct = $stockProduct;
		}

		### Category Product ###
		public function getCategoryProduct()
		{
			return $this->categoryProduct;
		}

		public function setCategoryProduct($categoryProduct)
		{
			$this->categoryProduct = $categoryProduct;
		}
	}
