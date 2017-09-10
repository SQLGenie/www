
<?php
  require_once('./stripe-config.php');

  $token  = $_POST['stripeToken'];

  $customer = \Stripe\Customer::create(array(
    //  'email' => $email
      'source'  => $token

  ));

  $charge = \Stripe\Charge::create(array(
      'customer' => $customer->id,
      'amount'   => 2000,
      'currency' => 'usd'
  ));

  echo '<h1>Successfully charged $20.00!</h1>';
  session_destroy();
?>



































