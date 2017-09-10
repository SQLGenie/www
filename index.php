

<?php require_once('./config.php'); ?>



<form action="charge.php" method="post">

  <script src="https://checkout.stripe.com/checkout.js" class="stripe-button"

          data-key="<?php echo $stripe['publishable_key']; ?>"

          data-amount="5000" data-description="One year's subscription"></script>

!DOCTYPE html>

<html>
<head>
<meta charset="UTF-8">
<title>Title of the doc</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- font-awesome icons -->