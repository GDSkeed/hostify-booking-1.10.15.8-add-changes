<?php
if (!defined('WPINC')) die;

// $cardBrand = !empty($paymentData->source) && !empty($paymentData->source->brand) ? $paymentData->source->brand : null;
// $lastFour = !empty($paymentData->source) && !empty($paymentData->source->last4) ? $paymentData->source->last4 : null;
// $amount = !empty($paymentData->amount) ? ($paymentData->amount / 100) : null;
// $currency = !empty($paymentData->currency) ? strtoupper($paymentData->currency) : null;
// $note = !empty($paymentData->note) ? nl2br($paymentData->note) : null;


?>

<div class="hfy-wrap data-block">
    <div class="row mtop-5">
        <div class="col-md-5 payment-info">
            <?php include hfy_tpl('payment/charge-preview'); ?>
        </div>
        <div class="col-md-1"></div>
        <div class="col-md-6 payment-content">
            <div id="payment-form-main-container">
                <div>
                    <div class="booking-title"><?= __('Payment', 'hostifybooking') ?></div>
                </div>
                <div style="position:relative">
                    <div>
                        <div>

<div class="text-center">
    <svg xmlns="http://www.w3.org/2000/svg" width="120" height="120" viewBox="0 0 17 17"><path class="base" fill="#e00" d="M8.5,17 C3.80557963,17 0,13.1944204 0,8.5 C0,3.80557963 3.80557963,0 8.5,0 C13.1944204,0 17,3.80557963 17,8.5 C17,13.1944204 13.1944204,17 8.5,17 Z"></path><path class="glyph" fill="#FFF" d="M8.5,7.29791847 L6.12604076,4.92395924 C5.79409512,4.59201359 5.25590488,4.59201359 4.92395924,4.92395924 C4.59201359,5.25590488 4.59201359,5.79409512 4.92395924,6.12604076 L7.29791847,8.5 L4.92395924,10.8739592 C4.59201359,11.2059049 4.59201359,11.7440951 4.92395924,12.0760408 C5.25590488,12.4079864 5.79409512,12.4079864 6.12604076,12.0760408 L8.5,9.70208153 L10.8739592,12.0760408 C11.2059049,12.4079864 11.7440951,12.4079864 12.0760408,12.0760408 C12.4079864,11.7440951 12.4079864,11.2059049 12.0760408,10.8739592 L9.70208153,8.5 L12.0760408,6.12604076 C12.4079864,5.79409512 12.4079864,5.25590488 12.0760408,4.92395924 C11.7440951,4.59201359 11.2059049,4.59201359 10.8739592,4.92395924 L8.5,7.29791847 L8.5,7.29791847 Z"></path></svg>
</div>
<div class="text-center h4 mt-4">
    <?= __('There was a problem with your payment', 'hostifybooking') ?>
</div>
<div class="text-center text-muted">
    <?= $message; ?>
</div>

<div class="row mt-5">
    <a href="<?= $url_back ?>" class='col'>
        <div class="btn btn-warning btn-block btn-lg round-1">
            <?= __('Go back', 'hostifybooking') ?>
        </div>
    </a>
</div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
