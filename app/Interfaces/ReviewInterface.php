<?php

declare(strict_types=1);

namespace App\Interfaces;

interface ReviewInterface
{

	public function getReviews($product_id);

	public function createReview($data);
}