<?php if (!defined('WPINC')) die; ?>

<div class="hfy-widget-wrap">
    <div class="row overflow-hidden">
        <div class="col-12">
            <div class="row">
                <?php
                if (isset($topListings->listings)) {
                    include HOSTIFYBOOKING_DIR . 'inc/shortcodes/inc/load-settings.php';
                    foreach ($topListings->listings as $listing) {
                        $custom_color = '';//$settings->custom_color;
                        $type = 'top';
                        include HOSTIFYBOOKING_DIR . 'inc/shortcodes/inc/make-listing-item-vars.php';
                        include hfy_tpl('listing/listings-item');
                    }
                }
                ?>
            </div>
        </div>
    </div>
</div>
