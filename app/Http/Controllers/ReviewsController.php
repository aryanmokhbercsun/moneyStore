<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Interfaces\ReviewInterface;

class ReviewsController extends Controller
{
    //
	protected $reviewTool;

    public function __construct(ReviewInterface $reviewTool)
    {

    	$this->reviewTool = $reviewTool;

    }


    public function getReviews($product_id) {

		return $this->reviewTool->getReviews($product_id);

    }

    public function createReview(Request $request)
    {
    	$data = [ 
    		'username'=>$request->username, 
    		'product_id'=>$request->product_id, 
    		'review'=>$request->review
    	];


    	return $this->reviewTool->createReview($data);

    }
}
