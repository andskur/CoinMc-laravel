# CoinMc-laravel 
[![PHP version](https://badge.fury.io/ph/andskur%2Fcoinmc.svg)](https://badge.fury.io/ph/andskur%2Fcoinmc)
[![Latest Stable Version](https://poser.pugx.org/andskur/coinmc/v/stable)](https://packagist.org/packages/andskur/coinmc)

**CoinMc-laravel** is a sCoinMarketCap.com api wrapper for Laravel 5.4

## Install

    composer require andskur/coinmc

### Configuration

After installing, register the `Andskur\CoinMc\CoinMcServiceProvide` in your `config/app.php` configuration file:

```php
'providers' => [
    // Other service providers...

    Andskur\CoinMc\CoinMcServiceProvider::class,
],
```

Also, add the `CoinMc` facade to the `aliases` array in your `app` configuration file:

```php
'CoinMc' => Andskur\CoinMc\CoinMcFacade::class,
```

### Usage

```php
<?php

namespace App\Http\Controllers;

use CoinMc;

class SomeController extends Controller
{
    public function index(CoinMc $coinmc)
    {

        // Get CoinMarketCap tickers sorting by 24h volume
		$coinmc->getTicker();

		// Get ticker for specific coin
		$coin = 'bitcoin';
		$coinmc->tickerCoin($coin);

		// Get global data
		$coinmc->globalData();
    }
}
```

See the [API documentation](https://coinmarketcap.com/api/) for more information about the endpoints and responses.

## License

CoinMc-laravel is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)