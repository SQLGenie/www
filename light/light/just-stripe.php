<!-- PAYMENT FORM>--> 

<?php
//require_once('/elda.php');

// Set your secret key: remember to change this to your live secret key in production
// See your keys here: https://dashboard.stripe.com/account/apikeys
require '/stripe-php/init.php';
\Stripe\Stripe::setApiKey("sk_live_NKzmBcIxDHuWe0SLna1pbAep");
//$token = $_POST['ac_BE6yTnvh6HnKK8KQMjUwFz78giA4miRT'];
if (isset($_POST['stripeToken']) ){
$token = $_POST['stripeToken'];

$customer =\Stripe\Customer::create(array(
	'email'=>'brenda-v-stokes@hotmail.com',
	'source' =>$token
	));


$charge = \Stripe\Charge::create(array(
  "amount" => 1000,
  "currency" => "usd",
  "source" => $token,
  "description" => "Test Charge",
  ));
  echo '<h1>Successfully charged $50.00!</h1>';
}

?>