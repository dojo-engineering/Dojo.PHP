<?php

namespace Dojo_PHP\Tests;

use PHPUnit\Framework\TestCase;

use Dojo_PHP\WebHooksUtil;
use Dojo_PHP\ApiException;

class WebHooksUtilTest extends TestCase {
    public function test_validatePayloadSignature_CalledForExampleFromDocs_ExpectCorrectHashIsCalculated() {
        // Arrange
        $json = "{\"id\":\"evt_hnnHxIKR_Uy6bhZCusCltw\",\"event\":\"payment_intent.created\",\"accountId\":\"acc_test\",\"createdAt\":\"2022-02-01T13:07:41.8667859Z\",\"data\":{\"paymentIntentId\":\"pi_vpwd4ooAPEqyNAQe4z89WQ\",\"paymentStatus\":\"Created\",\"captureMode\":\"Auto\"}}";
        $secret = "PDYkJQq6sESYHp_zJuTTBQ";
        $dojoSignature = "sha256=4B-49-F8-FE-25-A7-E6-7D-00-4F-A7-9C-F8-0B-63-00-C7-77-B4-F2-2D-E5-E1-22-84-FA-04-18-50-A1-76-FD";
        
        // Act & assert
        WebHooksUtil::validatePayloadSignature($json, $secret, $dojoSignature);
        $this->assertEquals(true, true, "Must not fail with proper exception");
    }

    public function test_validatePayloadSignature_CalledForIncorrectExampleFromDocs_ExpectException() {
        try {
            // Arrange
            $json = "{\"id\":\"evt_hnnHxIKR_Uy6bhZCusCltw\",\"event\":\"payment_intent.created\",\"accountId\":\"acc_test\",\"createdAt\":\"2022-02-01T13:07:41.8667859Z\",\"data\":{\"paymentIntentId\":\"pi_vpwd4ooAPEqyNAQe4z89WQ\",\"paymentStatus\":\"Created\",\"captureMode\":\"Auto\"}}";
            $secret = "PDYkJQq6sESYHp_zJuTTBQ";
            $dojoSignature = "sha256=5B-49-F8-FE-25-A7-E6-7D-00-4F-A7-9C-F8-0B-63-00-C7-77-B4-F2-2D-E5-E1-22-84-FA-04-18-50-A1-76-FD";
            
            WebHooksUtil::validatePayloadSignature($json, $secret, $dojoSignature);
            $this->assertEquals(true, false, "Must fail with proper exception");
        }
        catch (ApiException $ex) {
            $this->assertEquals($ex->getMessage(), "Signature provided in 'dojo-signature' is incorrect!", "Must fail with proper exception");
        }
    }
}