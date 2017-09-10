<?php

  require_once('config.php');

\Stripe\Stripe::setApiKey("sk_test_QO8aG7qZUygMFwlel0jtrCPO");

\Stripe\Charge::create(array(
  "amount" => 2000,
  "currency" => "usd",
  "source" => "tok_amex", // obtained with Stripe.js
  "description" => "Charge for madison.garcia@example.com"
), array(
  "idempotency_key" => "UcMFp5Onxbold61g",
));

$first_number = 10;
$second_number = 20;
$sum_total = $first_number + $second_number;


  echo '<h1>Successfully charged $';
   print  ($sum_total)  

?>