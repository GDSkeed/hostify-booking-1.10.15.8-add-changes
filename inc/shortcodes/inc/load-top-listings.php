<?php

$api = new HfyApi();
$topListings_ = $api->getTopListings($max);
if ($topListings_) {
	if (!$topListings_->success) {
		throw new HttpException(503, __('Please try again later', 'hostifybooking'));
	} else {
		$topListings = $topListings_->data;
	}
}
