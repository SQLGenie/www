
<?php
  require_once('./stripe-config.php');

  $token  = $_POST['stripeToken'];

  $customer = \Stripe\Customer::create(array(
    //  'email' => $email
      'source'  => $token

  ));

  $charge = \Stripe\Charge::create(array(
      'customer' => $customer->id,
      'amount'   => 15000,
      'currency' => 'usd'
  ));

  echo '<h1>Successfully charged $150.00!</h1>';
  require_once ('./index.html');
  session_destroy();
?>



































