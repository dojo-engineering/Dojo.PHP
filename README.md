# Dojo PHP SDK

The official [Dojo][dojo] PHP library, supporting [Payments API][api-docs].

## Installation

Use [Composer](https://getcomposer.org/) to install the Dojo PHP library:

```sh
composer require dojo/dojo-php
```

## Build source code

In order to build, PHP 7.4+ is required. Alternatively, use the VSCode devcontainer.
Do the following:

1. Run:

```sh
composer install
```

2. Run from the root of the repository (with `execute` permission):

```sh
./build/generate-openapi.sh
```

3. Copy all files from `/generated/src` into `/src`

## Documentation

For a comprehensive list of examples, check out the [API documentation][api-docs].

## Usage

```php
use Dojo_PHP\ApiFactory;

$apiKey = "YOUR_API_KEY";
$apiPaymentIntent = ApiFactory::createPaymentIntentApi($apiKey);

$req = new CreatePaymentIntentRequest();
$req->setReference("test");

$money = new Money();
$money->setValue(100);
$money->setCurrencyCode("GBP");

$req->setAmount($money);

$pi = $apiPaymentIntent->paymentIntentsCreatePaymentIntent(\Dojo_PHP\API_VERSION, $req);
```

For any requests, bugs, or comments, please [open an issue][issues] or [submit a pull request][pulls]. You can also reach out to us on our [Discord server][discord].

[api-docs]: https://docs.dojo.tech/payments/api
[issues]: https://github.com/dojo-engineering/Dojo.PHP/issues
[pulls]: https://github.com/dojo-engineering/Dojo.PHP/pulls
[dojo]: https://dojo.tech
[discord]: https://discord.gg/tTG98EWVdB