<?php

namespace CreateTerminalSession;
require_once "vendor/autoload.php";

use Dojo_PHP\ApiFactory;
use Dojo_PHP\Model\CreateTerminalSessionRequest;
use Dojo_PHP\Model\TerminalSessionDetails;
use Dojo_PHP\Model\TerminalSessionSaleDetails;

$apiKey = "sk_sandbox_1WYDtq7yAdqhmQ7KEUAvPlCCRBYc9HTY9KOPJKZtfWkzsSISj1L8c4GG5l4pBB5Bj85hkJgTL9vmOmki5QnQfQ";
$apiTerminalSession = ApiFactory::createTerminalSessionApi($apiKey);

$req = new CreateTerminalSessionRequest();
$req->setTerminalId("tm_65a7e8c0bee9b6390862337c");

$saleDetails = new TerminalSessionSaleDetails();
$saleDetails->setPaymentIntentId("pi_sandbox_CQ2oEOUf5kOmzmbdu7kSuQ");
$terminalSessionDetail= new TerminalSessionDetails();
$terminalSessionDetail->setSale($saleDetails);
$terminalSessionDetail->setSessionType("Sale");

$req->setDetails($terminalSessionDetail);

$ts = $apiTerminalSession->terminalSessionCreate(\Dojo_PHP\API_VERSION, "softwareHouse1", "reseller1", $req);

echo $ts;

?>