<?php

namespace App\Services;

use App\Product;
use App\Interfaces\ProductInterface;

class ProductService implements ProductInterface
{





	public function getAllProducts()
	{

		return Product::all()->toArray();

	}

	public function showProductAndReviews($id)
	{
		//one to many relationship
		$product = Product::whereIn('id', [$id])->with('reviews')->first()->toArray();
		return response()->json([
			"product" => $product
		],200);
	}

	public function showProduct($id)
	{
		
		$product = Product::whereId($id)->first();
		return response()->json([
            "product" => $product
        ], 200);
	}

	public function createProduct($data)
	{

		$product = new Product([
			'username' => $data['username'],
			'title' => $data['title'],
			'description' => $data['description'],
		]);

		// $product->user_id=$data['user_id'];
		// $product->name=$data['name'];
		// $product->description=$data['description'];

		$product->save();

		return ['message'=>'success'];

		return response()->json([
            "product" => $product
        ], 200);
	}

}