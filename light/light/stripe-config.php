

<?php
require_once('vendor/autoload.php');

$stripe = array(
  "secret_key"      => "sk_live_NKzmBcIxDHuWe0SLna1pbAep",
  "publishable_key" => "pk_live_g1XasmRmPOxQu6qVmy3MXErz"
);

\Stripe\Stripe::setApiKey($stripe['secret_key']);
?>
