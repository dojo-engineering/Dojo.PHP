<?php

namespace Dojo_PHP;
require_once __DIR__ . '/Constants.php';

/**
 * Use ApiFactory to create an API - so basically a starting point.
 */
class ApiFactory {
    public static function createPaymentIntentApi($apiKey) {
        $api = new Api\PaymentIntentsApi();
        ApiFactory::updateConfigWithApiKey($api, $apiKey);
        
        return $api;
    }

    public static function createReversalApi($apiKey) {
        $api = new Api\ReversalApi();
        ApiFactory::updateConfigWithApiKey($api, $apiKey);

        return $api;
    }

    public static function createRefundsApi($apiKey) {
        $api = new Api\RefundsApi();
        ApiFactory::updateConfigWithApiKey($api, $apiKey);

        return $api;
    }

    public static function createWebhooksApi($apiKey) {
        $api = new Api\WebhooksApi();
        ApiFactory::updateConfigWithApiKey($api, $apiKey);

        return $api;
    }

    public static function createCapturesApi($apiKey) {
        $api = new Api\CapturesApi();
        ApiFactory::updateConfigWithApiKey($api, $apiKey);

        return $api;
    }

    public static function createCustomersApi($apiKey) {
        $api = new Api\CustomersApi();
        ApiFactory::updateConfigWithApiKey($api, $apiKey);

        return $api;
    }

    private static function updateConfigWithApiKey($api, $apiKey) {
        $api->getConfig()->setApiKey(HEADER_AUTHORIZATION, BASIC_AUTH_PREFIX . " {$apiKey}");
    }
}