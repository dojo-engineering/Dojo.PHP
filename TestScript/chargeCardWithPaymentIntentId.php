<?php

namespace SetupIntent;
require_once "vendor/autoload.php";

use Dojo_PHP\ApiFactory;
use Dojo_PHP\Model\CreatePaymentIntentRequest;
use Dojo_PHP\Model\ChargeResponse;
use Dojo_PHP\Model\Money;

$apiKey = "sk_sandbox_c8oLGaI__msxsXbpBDpdtwJEz_eIhfQoKHmedqgZPCdBx59zpKZLSk8OPLT0cZolbeuYJSBvzDVVsYvtpo5RkQ";
$apiPaymentIntent = ApiFactory::createPaymentIntentApi($apiKey);

$req = new CreatePaymentIntentRequest();
$req->setReference("test");

$money = new Money();
$money->setValue(100);
$money->setCurrencyCode("GBP");

$req->setAmount($money);

require_once "paymentIntentId.php";
$header = new ChargeResponse();

$pi = $apiPaymentIntent->paymentIntentsChargePaymentIntentWithHttpInfo(\Dojo_PHP\API_VERSION, $paymentIntentId, $header);

echo $pi [0];

?>