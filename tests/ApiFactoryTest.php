<?php

namespace Dojo_PHP\Tests;

use PHPUnit\Framework\TestCase;
use Dojo_PHP\ApiFactory;
use Dojo_PHP\Model\CreatePaymentIntentRequest;
use Dojo_PHP\Model\CreateRefundRequest;
use Dojo_PHP\Model\CreateCaptureRequest;
use Dojo_PHP\Model\Money;
use Dojo_PHP\ApiException;

require_once __DIR__ . "./../src/Constants.php";

class ApiFactoryTest extends TestCase {

    const TEST_API_KEY = "sk_sandbox_c8oLGaI__msxsXbpBDpdtwJEz_eIhfQoKHmedqgZPCdBx59zpKZLSk8OPLT0cZolbeuYJSBvzDVVsYvtpo5RkQ";

    public function test_createPaymentIntentApi_UseCreatedApiToCreateAPi_ExpectPiCreated() {
        // Arrange
        $api = ApiFactory::createPaymentIntentApi(ApiFactoryTest::TEST_API_KEY);
        $req = new CreatePaymentIntentRequest();
        $req->setReference("test");
       
        $money = new Money();
        $money->setValue(100);
        $money->setCurrencyCode("GBP");
        
        $req->setAmount($money);
        
        // Act
        $pi = $api->paymentIntentsCreatePaymentIntent(\Dojo_PHP\API_VERSION, $req);

        // Assert
        $this->assertEquals($pi->getAmount()->getValue(), 100, "Must be 100 minor units");
        $this->assertEquals($pi->getAmount()->getCurrencyCode(), 'GBP', "Must be in GBP");
    }

    public function test_createReversalApi_UseCreatedApi_ExpectWorking() {
        try {
            // Arrange
            $api = ApiFactory::createReversalApi(ApiFactoryTest::TEST_API_KEY);
            
            // Act
            $pi = $api->reversalCreate(\Dojo_PHP\API_VERSION, "pi_sandbox_T");
        } catch (ApiException $ex) {
            $this->assertEquals($ex->getCode(), 400, "Must fail with bad request");
        }
    }

    public function test_createRefundsApi_UseCreatedApi_ExpectWorking() {
        try {
            // Arrange
            $api = ApiFactory::createRefundsApi(ApiFactoryTest::TEST_API_KEY);

            // Act
            $pi = $api->refundsCreate(\Dojo_PHP\API_VERSION, "pi_sandbox_T", "idemp", new CreateRefundRequest());
        } catch (ApiException $ex) {
            $this->assertEquals($ex->getCode(), 400, "Must fail with bad request");
        }
    }

    public function test_createCustomersApi_UseCreatedApi_ExpectWorking() {
        try {
            // Arrange
            $api = ApiFactory::createCustomersApi(ApiFactoryTest::TEST_API_KEY);
            
            // Act
            $pi = $api->customersCreateCustomerSecret("id", \Dojo_PHP\API_VERSION);

        } catch (ApiException $ex) {
            $this->assertEquals($ex->getCode(), 404, "Must fail with not found");
        }
    }

    public function test_createCupturesApi_UseCreatedApi_ExpectWorking() {
        try {
            // Arrange
            $api = ApiFactory::createCapturesApi(ApiFactoryTest::TEST_API_KEY);
            
            // Act
            $pi = $api->capturesCreate(\Dojo_PHP\API_VERSION, "pi_sandbox_T", new CreateCaptureRequest());

        } catch (ApiException $ex) {
            $this->assertEquals($ex->getCode(), 400, "Must fail with bad request");
        }
    }

    public function test_createWebhooksApi_UseCreatedApi_ExpectWorking() {
        try {
            // Arrange
            $api = ApiFactory::createWebhooksApi(ApiFactoryTest::TEST_API_KEY);
            
            // Act
            $pi = $api->webhooksDeleteSecret(\Dojo_PHP\API_VERSION, "sub_id", "sec_id");

        } catch (ApiException $ex) {
            $this->assertEquals($ex->getCode(), 401, "Must fail with bad request");
        }
    }
}