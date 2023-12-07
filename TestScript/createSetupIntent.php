<?php

namespace SetupIntent;
require_once "vendor/autoload.php";

use Dojo_PHP\ApiFactory;
use Dojo_PHP\Model\CreateSetupIntentRequest;
use Dojo_PHP\Model\Money;

$apiKey = "sk_sandbox_c8oLGaI__msxsXbpBDpdtwJEz_eIhfQoKHmedqgZPCdBx59zpKZLSk8OPLT0cZolbeuYJSBvzDVVsYvtpo5RkQ";
$apiSetupIntent = ApiFactory::createSetupIntentsApi($apiKey);

$req = new CreateSetupIntentRequest();

$money = new Money();
$money->setValue(100);
$money->setCurrencyCode("GBP");

$req->setIntendedAmount($money);
$req->setMerchantInitiatedTransactionType("NoShow");
$req->setTerms("Example terms");
$req->setReference("test");

$si = $apiSetupIntent->setupIntentsCreate(\Dojo_PHP\API_VERSION, $req);

file_put_contents("setupIntentId.php", '<?php $setupIntentId = "' . $si->getId() . '";');

echo $si;

?>