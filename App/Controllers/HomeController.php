<?php
	
	namespace App\Controllers;

	use App\Models\DAO\UserDAO;
	use App\Models\DAO\SupplierDAO;
	use App\Models\DAO\ProductDAO;

	// Método que renderiza o dashboard da aplicação
	class HomeController extends Controller
	{
		public function index()
		{	
			$userDAO     = new UserDAO();
			$supplierDAO = new supplierDAO();
			$productDAO  = new productDAO();

			$totalUser     = $userDAO->totalUsers();
			$totalSupplier = $supplierDAO->totalSuppliers();
			$totalProduct  = $productDAO->totalProducts();

        	self::setViewParam('totalUser', $totalUser);
			self::setViewParam('totalSupplier', $totalSupplier);
			self::setViewParam('totalProduct', $totalProduct);

			$this->render('home/index');
		}
	}
	