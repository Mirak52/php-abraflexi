#!/usr/bin/php -f
<?php

declare(strict_types=1);

/**
 * This file is part of the EaseCore package.
 *
 * (c) Vítězslav Dvořák <http://vitexsoftware.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Example\AbraFlexi;

include_once './config.php';

include_once '../vendor/autoload.php';

$banker = new \AbraFlexi\Banka();
$first = $banker->getColumnsFromFlexibee(['id'], ['limit' => 1]);

$banker->ignore404(true);
$response404 = $banker->performRequest('error.json');
$banker->ignore404(fals);

$response200X = $banker->performRequest('/banka/'.$first[0]['id']);
