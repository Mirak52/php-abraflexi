<?php

/**
 * AbraFlexi - Bank Class.
 *              Objekt Banky.
 *
 * @author     Vítězslav Dvořák <vitex@arachne.cz>
 * @copyright  (C) 2015-2024 Spoje.Net
 */

declare(strict_types=1);

/**
 * This file is part of the EaseCore package.
 *
 * (c) Vítězslav Dvořák <http://vitexsoftware.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace AbraFlexi;

/**
 * Banka.
 *
 * @see https://demo.flexibee.eu/c/demo/banka/properties Vlastnosti evidence
 */
class Banka extends RW implements \AbraFlexi\Document
{
    use stitky;
    use firma;
    use email;
    use subItems;
    use getChanges;
    use sum;
    use kod;

    /**
     * Evidence užitá objektem.
     */
    public ?string $evidence = 'banka';

    /**
     * Stáhne bankovní výpisy  ( trvá delší dobu ).
     *
     * @return bool
     */
    public function stahnoutVypisyOnline()
    {
        $this->performRequest('nacteni-vypisu-online.json', 'PUT', 'txt');

        return $this->lastResponseCode === 200;
    }

    /**
     * Start invoice automatic matching process ( it takes longer time )
     * Spustí proces automatického párování plateb. ( trvá delší dobu ).
     *
     * @see https://demo.flexibee.eu/devdoc/parovani-plateb Interní dokumentace
     *
     * @param bool   $advanced Use Advanced matching method ?
     * @param string $filter   Filter bank records before pairing ?
     *
     * @return bool
     */
    public function automatickeParovani($advanced = false, $filter = null)
    {
        $filterUrl = $filter === null ? '' : rtrim($filter, '/').'/';
        $this->performRequest($filterUrl.'automaticke-parovani'.($advanced ? '-pokrocile' : ''), 'PUT');

        return $this->lastResponseCode === 200;
    }
}
