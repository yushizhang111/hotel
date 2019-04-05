<?php
	require_once "stripe_init.php";

	$stripeDetails = array(
		"secretKey" => "sk_test_bw6PSFWxIcS2pF5anR1ooDor",
		"publishableKey" => "pk_test_WxgH93ElITQ6GxnPAZgu1RNU"
	);

	// Set your secret key: remember to change this to your live secret key in production
	// See your keys here: https://dashboard.stripe.com/account/apikeys
	\Stripe\Stripe::setApiKey($stripeDetails['secretKey']);
?>
