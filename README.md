# PHPNumberFormatKMT

## What is this?
This is a **very very** simple number format library for formatting numbers like; 320.000.000 -> 320M, 12.000 -> 12K, 1.300.000.000 -> 1.3T.

## Why I did that?
I don't like PHP's number/currency formatting. It's only formats with dots (.) and commas (,). Most games use (K, M, T) letters for number formatting. And I think that's better.

## How to install?
`composer require bariscodefx/php-number-format-kmt`

## Usage
```php
<?php
use PHPNumberFormatKMT\NumberFormatKMT;

echo NumberFormatKMT::format(1000); // 1 K
echo NumberFormatKMT::format(1000, discriminator: ''); // 1K

echo NumberFormatKMT::format(1111); // 1.1 K
echo NumberFormatKMT::format(1111, precision: 2); // 1.11 K
```

## Support
If you like this project, you can contribute to me by starring it.
