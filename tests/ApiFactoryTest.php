<?php

namespace Dojo_PHP\Tests;

use PHPUnit\Framework\TestCase;
use Dojo_PHP\ApiFactory;
use Dojo_PHP\Model\CreatePaymentIntentRequest;
use Dojo_PHP\Model\CreateRefundRequest;
use Dojo_PHP\Model\CreateCaptureRequest;
use Dojo_PHP\Model\Money;
use Dojo_PHP\ApiException;
use Dojo_PHP\Model\CreateTerminalSessionRequest;

require_once __DIR__ . "./../src/Constants.php";

class ApiFactoryTest extends TestCase {

    const TEST_API_KEY = "sk_sandbox_c8oLGaI__msxsXbpBDpdtwJEz_eIhfQoKHmedqgZPCdBx59zpKZLSk8OPLT0cZolbeuYJSBvzDVVsYvtpo5RkQ";
    const VCM_TERMINA_ID = "tm_sandbox_6790d2a862c6f4fbc4a3b264"; // A VCM terminal in sandbox associated to this account

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
            $this->assertEquals($ex->getCode(), 404, "Must fail with not found");
        }
    }

    public function test_createRefundsApi_UseCreatedApi_ExpectWorking() {
        try {
            // Arrange
            $api = ApiFactory::createRefundsApi(ApiFactoryTest::TEST_API_KEY);

            // Act
            $pi = $api->refundsCreate(\Dojo_PHP\API_VERSION, "pi_sandbox_T", "idemp", new CreateRefundRequest());
        } catch (ApiException $ex) {
            $this->assertEquals($ex->getCode(), 400, "Must fail with invalid request");
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
            $this->assertEquals($ex->getCode(), 404, "Must fail with not found");
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
    
    public function test_getTerminalsApi_GetTerminals_ExpectWorking() {
        // Arrange
        $api = ApiFactory::createTerminalsApi(ApiFactoryTest::TEST_API_KEY);
        
        // Act
        $terminals = $api->terminalsListTerminals(\Dojo_PHP\API_VERSION, "swhid");
        
        // Assert
        $this->assertNotNull($terminals, "Must return a result");
        $this->assertIsArray($terminals, "Must return an array of terminals");
        
        // Cast to array to help with type checking since successful response should always be array
        $terminalArray = (array)$terminals;
        $this->assertGreaterThanOrEqual(0, count($terminalArray), "Must return 0 or more terminals");
        
        // If we have terminals, check they are Terminal objects
        if (count($terminalArray) > 0) {
            $this->assertInstanceOf('Dojo_PHP\Model\Terminal', $terminalArray[0], "First item should be a Terminal object");
        }
    }
    
    public function test_createTerminalSessionsApi_CreateTerminalSession_ExpectWorking() {
        // Arrange - First create a payment intent
        $paymentIntentApi = ApiFactory::createPaymentIntentApi(ApiFactoryTest::TEST_API_KEY);
        $piRequest = new CreatePaymentIntentRequest();
        $piRequest->setReference("terminal-session-test");
        
        $money = new Money();
        $money->setValue(100);
        $money->setCurrencyCode("GBP");
        $piRequest->setAmount($money);
        
        // Create payment intent
        $paymentIntent = $paymentIntentApi->paymentIntentsCreatePaymentIntent(\Dojo_PHP\API_VERSION, $piRequest);
        $this->assertNotNull($paymentIntent->getId(), "Payment intent should have an ID");
        
        // Arrange - Create terminal session API and request
        $terminalSessionApi = ApiFactory::createTerminalSessionsApi(ApiFactoryTest::TEST_API_KEY);
        
        // Create the terminal session request
        $terminalSessionRequest = new \Dojo_PHP\Model\CreateTerminalSessionRequest();
        $terminalSessionRequest->setTerminalId(ApiFactoryTest::VCM_TERMINA_ID);
        
        // Create session details with sale details containing payment intent ID
        $saleDetails = new \Dojo_PHP\Model\TerminalSessionSaleDetails();
        $saleDetails->setPaymentIntentId($paymentIntent->getId());
        
        $sessionDetails = new \Dojo_PHP\Model\TerminalSessionDetails();
        $sessionDetails->setSale($saleDetails);
        $sessionDetails->setSessionType(\Dojo_PHP\Model\TerminalSessionType::SALE);
        
        $terminalSessionRequest->setDetails($sessionDetails);
        
        // Act
        $terminalSession = $terminalSessionApi->terminalSessionCreate(\Dojo_PHP\API_VERSION, "swhid", $terminalSessionRequest);
        
        // Assert - Verify terminal session creation
        $this->assertNotNull($terminalSession, "Terminal session should be created");
        $this->assertNotNull($terminalSession->getId(), "Terminal session should have an ID");
        $this->assertStringStartsWith("ts_", $terminalSession->getId(), "Terminal session ID should start with 'ts_'");
        
        // Act - Fetch the terminal session to verify it exists
        $fetchedTerminalSession = $terminalSessionApi->terminalSessionGet(
            $terminalSession->getId(), 
            \Dojo_PHP\API_VERSION, 
            "swhid"
        );
        
        // Assert - Verify fetched terminal session
        $this->assertNotNull($fetchedTerminalSession, "Fetched terminal session should not be null");
        $this->assertEquals($terminalSession->getId(), $fetchedTerminalSession->getId(), "Fetched terminal session should have same ID");
        $this->assertNotNull($fetchedTerminalSession->getStatus(), "Fetched terminal session should have a status");
    }
}