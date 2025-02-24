<?php if (!defined('WPINC')) die; ?>

<?php //If Mobile ?>
<?php if ($mobile && !$tablet): ?>

	<span class='hfy-listings-map-toggle hfy-listings-map-toggle-mobile <?= $mapIsHidden ? 'hfy-ctrl-show-map' : 'hfy-ctrl-hide-map' ?>'>
		<span class='btn btn-default hfy-lmt-show'>
			<?= __('Show map', 'hostifybooking'); ?>
		</span>
		<span class='btn btn-default hfy-lmt-hide'>
			<?= __('Hide map', 'hostifybooking'); ?>
		</span>
	</span>

<?php //If Tablet ?>	
<?php elseif (!$mobile && $tablet): ?>

	<span class='hfy-listings-map-toggle hfy-listings-map-toggle-tablet <?= $mapIsHidden ? 'hfy-ctrl-show-map' : 'hfy-ctrl-hide-map' ?>'>
		<span class='btn btn-default hfy-lmt-show'>
			<?= __('Show map', 'hostifybooking'); ?>
		</span>
		<span class='btn btn-default hfy-lmt-hide'>
			<?= __('Hide map', 'hostifybooking'); ?>
		</span>
	</span>

<?php //If Mobile & Tablet ?>
<?php elseif($mobile && $tablet): ?>
	<span class='hfy-listings-map-toggle hfy-listings-map-toggle-mobile hfy-listings-map-toggle-tablet <?= $mapIsHidden ? 'hfy-ctrl-show-map' : 'hfy-ctrl-hide-map' ?>'>
		<span class='btn btn-default hfy-lmt-show'>
			<?= __('Show map', 'hostifybooking'); ?>
		</span>
		<span class='btn btn-default hfy-lmt-hide'>
			<?= __('Hide map', 'hostifybooking'); ?>
		</span>
	</span>
	
<?php else: ?>

	<span class='hfy-listings-map-toggle <?= $mapIsHidden ? 'hfy-ctrl-show-map' : 'hfy-ctrl-hide-map' ?>'>
		<svg height="20px" width="20px" fill="#454545" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 105.93 122.88"><defs><style>.c1{fill-rule:evenodd}</style></defs><path class="c1" d="M56.92,73.14a1.62,1.62,0,0,1-1.86.06A65.25,65.25,0,0,1,38.92,58.8,51.29,51.29,0,0,1,28.06,35.37C26.77,27.38,28,19.7,32,13.45a27,27,0,0,1,6-6.66A29.23,29.23,0,0,1,56.36,0,26,26,0,0,1,73.82,7.12a26,26,0,0,1,4.66,5.68c4.27,7,5.19,16,3.31,25.12A55.29,55.29,0,0,1,56.92,73.14Zm-19,.74V101.7l30.15,13V78.87a65.17,65.17,0,0,0,6.45-5.63v41.18l25-12.59v-56l-9.61,3.7a61.61,61.61,0,0,0,2.38-7.81l9.3-3.59A3.22,3.22,0,0,1,105.7,40a3.18,3.18,0,0,1,.22,1.16v62.7a3.23,3.23,0,0,1-2,3L72.72,122.53a3.23,3.23,0,0,1-2.92,0l-35-15.17L4.68,122.53a3.22,3.22,0,0,1-4.33-1.42A3.28,3.28,0,0,1,0,119.66V53.24a3.23,3.23,0,0,1,2.32-3.1L18.7,43.82a58.63,58.63,0,0,0,2.16,6.07L6.46,55.44v59l25-12.59V67.09a76.28,76.28,0,0,0,6.46,6.79ZM55.15,14.21A13.72,13.72,0,1,1,41.43,27.93,13.72,13.72,0,0,1,55.15,14.21Z"/></svg>

		<span class='hfy-lmt-show'>
			<?= __('Show map', 'hostifybooking'); ?>
		</span>
		<span class='hfy-lmt-hide'>
			<?= __('Hide map', 'hostifybooking'); ?>
		</span>
	</span>

<?php endif; ?>
