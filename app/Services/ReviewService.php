<?php

namespace App\Services;

use App\Review;
use App\Interfaces\ReviewInterface;

class ReviewService implements ReviewInterface
{





	public function getReviews($product_id)
	{

		return Review::all()->toArray();

	}

	public function createReview($data)
	{

		$review = new Review([
			
			'username' => $data['username'],
			'product_id' => $data['product_id'],
			'review' => $data['review'],
		]);

		// $review->user_id=$data['user_id'];
		// $review->product_id=$data['product_id'];
		// $review->review=$data['review'];

		$review->save();

		return ['message'=>'success'];

		return response()->json([
            "review" => $review
        ], 200);
	}

}