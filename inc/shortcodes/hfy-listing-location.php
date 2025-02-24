<?php

if ( ! defined( 'WPINC' ) ) die;

require_once HOSTIFYBOOKING_DIR . 'inc/lib.php';

include HOSTIFYBOOKING_DIR . 'inc/shortcodes/inc/load-settings.php';

// wp_enqueue_script( 'hfygmaps' );
// wp_enqueue_script( 'hfygmap3' );
hfyIncludeMaps($settings);

require_once HOSTIFYBOOKING_DIR . 'inc/helpers/ListingHelper.php';

$prm = hfy_get_vars_def();

$id = $prm->id && empty($id) ? $prm->id : $id;

if (empty($id)) {
	throw new Exception(__('No listing ID', 'hostifybooking'));
}

$guests = $prm->guests;
$adults = $prm->adults;
$children = $prm->children;
$infants = $prm->infants;

$startDate = $prm->start_date;
$endDate = $prm->end_date;

include HOSTIFYBOOKING_DIR . 'inc/shortcodes/inc/load-listing.php';
include HOSTIFYBOOKING_DIR . 'inc/shortcodes/inc/make-listing-tpl-vars.php';
?>
<script>
    var 
    hfyGoogleMapsApiKey = '<?= esc_js($settings->api_key_maps); ?>',
    // Debug - check actual URLs
    googleMapLocationPin = '<?= str_replace('http://', 'https://', HOSTIFYBOOKING_URL . 'public/res/images/map-marker.png'); ?>', // <?= HOSTIFYBOOKING_URL . 'public/res/images/map-marker.png' ?>
    googleMapLocationProperty = '<?= str_replace('http://', 'https://', HOSTIFYBOOKING_URL . 'public/res/images/house-location.png'); ?>'; // <?= HOSTIFYBOOKING_URL . 'public/res/images/house-location.png' ?>
</script>
<?php
include hfy_tpl('listing/listing-location');
