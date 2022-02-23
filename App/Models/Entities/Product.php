<?php
	
	namespace App\Models\Entities;
	
	class Product
	{
		private $id_product;
		private $ref_product;
		private $name_product;
		private $description_product;
		private $cost_price_product;
		private $sale_price_product;
		private $stock_product;
		private $category_product;

		### ID Product ###
		public function getIdProduct()
		{
			return $this->id_product;
		}

		public function setIdProduct($id_product)
		{
			$this->id_product = $id_product;
		}

		### References Product ###
		public function getRefProduct()
		{
			return $this->ref_product;
		}

		public function setRefProduct($ref_product)
		{
			$this->ref_product = $ref_product;
		}

		### Name Product ###
		public function getNameProduct()
		{
			return $this->name_product;
		}

		public function setNameProduct($name_product)
		{
			$this->name_product = $name_product;
		}

		### Description Product ###
		public function getDescriptionProduct()
		{
			return $this->description_product;
		}

		public function setDescriptionProduct($description_product)
		{
			$this->description_product = $description_product;
		}

		### Cost Price Product ###
		public function getCostPriceProduct()
		{
			return $this->cost_price_product;
		}

		public function setCostPriceProduct($cost_price_product)
		{
			$this->cost_price_product = $cost_price_product;
		}

		### Sale Price Product ###
		public function getSalePriceProduct()
		{
			return $this->sale_price_product;
		}

		public function setSalePriceProduct($sale_price_product)
		{
			$this->sale_price_product = $sale_price_product;
		}

		### Stock Product ###
		public function getStockProduct()
		{
			return $this->stock_product;
		}

		public function setStockProduct($stock_product)
		{
			$this->stock_product = $stock_product;
		}

		### Category Product ###
		public function getCategoryProduct()
		{
			return $this->category_product;
		}

		public function setCategoryProduct($category_product)
		{
			$this->category_product = $category_product;
		}
	}
