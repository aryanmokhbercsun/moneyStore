<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Interfaces\ProductInterface;

class ProductsController extends Controller
{
    //
    protected $productTool;

    public function __construct(ProductInterface $productTool)
    {

    	$this->productTool = $productTool;

    }

    public function getAllProducts()
    {
    	return $this->productTool->getAllProducts();

    }

    public function showProductAndReviews($id)
    {

    	return $this->productTool->showProductAndReviews($id);

    }

    public function showProduct($id)
    {

    	return $this->productTool->showProduct($id);

    }

    public function createProduct(Request $request)
    {
    	$data = [ 
    		'username'=>$request->username, 
    		'title'=>$request->title, 
    		'description'=>$request->description
    	];

    	

    	return $this->productTool->createProduct($data);

    }

}
