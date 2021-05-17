<?php
require_once('vendor/autoload.php');

$stripe = [
  "secret_key"      => "sk_live_CmWB5dEXCgC8DvfgWzXSW8Xc",
  "publishable_key" => "pk_live_vxf6BTKJ8mlCtIz1RkCS9dmg",
];

\Stripe\Stripe::setApiKey($stripe['secret_key']);
?>