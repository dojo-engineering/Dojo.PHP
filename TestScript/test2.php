<?php

namespace Test;
require_once "vendor/autoload.php";

use Dojo_PHP\ApiFactory;
use Dojo_PHP\Model\CreatePaymentIntentRequest;
use Dojo_PHP\Model\Customer;
use Dojo_PHP\Model\Money;
use Dojo_PHP\Model\PaymentMethod;
use Dojo_PHP\Model\SupportedPaymentMethods;
use Dojo_PHP\Model\Wallet;

$apiKey = "sk_sandbox_c8oLGaI__msxsXbpBDpdtwJEz_eIhfQoKHmedqgZPCdBx59zpKZLSk8OPLT0cZolbeuYJSBvzDVVsYvtpo5RkQ";
$client = ApiFactory::createPaymentIntentApi($apiKey);

    $req = new CreatePaymentIntentRequest();
    $req->setReference("test");
    $req->setPaymentMethods(["Wallet"]);

    $money = new Money();
    $money->setValue(100);
    $money->setCurrencyCode("GBP");

    $req->setAmount($money);

    $customer = new Customer();
    $customer->setId(123);
    $customer->setEmailAddress("test@gmail.com");
    $customer->setPhoneNumber(344332323);
    
    
    $req->setCustomer($customer);

    $pi = $client->paymentIntentsCreatePaymentIntent(\Dojo_PHP\API_VERSION, $req);
    echo $pi;