<?php


namespace App\Controllers\Admin;
use CodeIgniter\Controller;
use App\Controllers\BaseController;

/**********appel des modele utile ***************/

class Produit extends BaseController
{
	public function __construct(){
		
	}
	public function index()
	{
	
		

		echo view('admin/common/HeaderAdmin');
		echo view('admin/produit');
		echo view('admin/common/FooterAdmin');
	} 
	public function edit(){

	}
	public function delete(){
		
	}
}
?>