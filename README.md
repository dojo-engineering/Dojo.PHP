# dojo-php

The official [Dojo][dojo] PHP library, supporting Remote Payments API.

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

2. Run from the root of the repository:

```sh
/build/generate-openapi.sh
```

3. Copy all files from `/generated/src` into `/src`

## Documentation

For a comprehensive list of examples, check out the [API
documentation][api-docs].

## Usage

```php
use Dojo_PHP\ApiFactory;

$apiKey = "YOUR_API_KEY";
$client = ApiFactory::createPaymentIntentApi($apiKey);
```

For any requests, bugs, or comments, please [open an issue][issues] or [submit a pull request][pulls].

[api-docs]: https://docs.dojo.tech
[issues]: https://github.com/dojo-engineering/Dojo.PHP/issues
[pulls]: https://github.com/dojo-engineering/Dojo.PHP/pulls
[dojo]: https://dojo.tech