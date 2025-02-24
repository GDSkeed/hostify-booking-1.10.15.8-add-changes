<?php

if ( ! defined( 'WPINC' ) ) die;

require_once HOSTIFYBOOKING_DIR . 'inc/lib.php';
require_once HOSTIFYBOOKING_DIR . 'inc/helpers/ListingHelper.php';
require_once HOSTIFYBOOKING_DIR . 'inc/helpers/UrlHelper.php';

$prm = hfy_get_vars_def();

// $id = $prm->id && empty($id) ? $prm->id : $id;

// if (empty($id)) {
// 	throw new Exception(__('No listing ID', 'hostifybooking'));
// }

$guests = $prm->guests;
$adults = $prm->adults;
$children = $prm->children;
$infants = $prm->infants;
$pets = $prm->pets;

$startDate = $prm->start_date;
$endDate = $prm->end_date;
$max = intval($max ?? 0);

include HOSTIFYBOOKING_DIR . 'inc/shortcodes/inc/load-top-listings.php';

include hfy_tpl('listing/top-listings');
