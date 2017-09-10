
<?php


/*require_once('vendor/autoload.php');*/

require_once('\wamp64\apps\phpsysinfo3.2.5\vendor\autoload.php');

$stripe = array(

  "secret_key"     => "sk_test_QO8aG7qZUygMFwlel0jtrCPO",

  "publishable_key"  =>  "pk_test_42jKZubWcTxyMJFExsGX7vcj"

);



/*\Stripe\Stripe::setApiKey($stripe["ssk_test_QO8aG7qZUygMFwlel0jtrCPO"]) ; */
\Stripe\Stripe::setApiKey("ssk_test_QO8aG7qZUygMFwlel0jtrCPO"); 
?>
