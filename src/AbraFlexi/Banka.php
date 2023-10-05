<?php

/**
 * AbraFlexi - Bank Class.
 *              Objekt Banky.
 *
 * @author     Vítězslav Dvořák <vitex@arachne.cz>
 * @copyright  (C) 2015-2023 Spoje.Net
 */

declare(strict_types=1);

namespace AbraFlexi;

use AbraFlexi\firma;
use AbraFlexi\RW;
use AbraFlexi\stitky;
use AbraFlexi\subItems;

/**
 * Banka
 *
 * @link https://demo.flexibee.eu/c/demo/banka/properties Vlastnosti evidence
 */
class Banka extends RW implements \AbraFlexi\Document
{
    use stitky;
    use firma;
    use email;
    use subItems;
    use getChanges;
    use sum;

    /**
     * Evidence užitá objektem.
     *
     * @var string
     */
    public $evidence = 'banka';

    /**
     * Bank pull mode of Json processing
     * @var boolean
     */
    private $pullMode = false;

    /**
     * Stáhne bankovní výpisy  ( trvá delší dobu )
     *
     * @return boolean
     */
    public function stahnoutVypisyOnline()
    {
        $this->pullMode = true;
        $this->performRequest('nacteni-vypisu-online.json', 'PUT', 'txt');
        $this->pullMode = false;
        return ($this->lastResponseCode == 200);
    }

    /**
     * Convert AbraFlexi Response JSON to Array
     *
     * @param string $rawJson
     *
     * @return array
     */
    public function rawJsonToArray($rawJson)
    {
        return $this->pullMode ? explode($rawJson, "\n") : parent::rawJsonToArray($rawJson);
    }

    /**
     * Start invoice automatic matching process ( it takes longer time )
     * Spustí proces automatického párování plateb. ( trvá delší dobu )
     *
     * @link https://demo.flexibee.eu/devdoc/parovani-plateb Interní dokumentace
     *
     * @param boolean $advanced Use Advanced matching method ?
     * @param string $filter Filter bank records before pairing ?
     *
     * @return boolean
     */
    public function automatickeParovani($advanced = false, $filter = null)
    {
        $filterUrl = $filter === null ? "" : rtrim($filter, '/') . '/';
        $this->performRequest($filterUrl . 'automaticke-parovani' . ($advanced ? '-pokrocile' : '' ), 'PUT');
        return $this->lastResponseCode == 200;
    }
}
