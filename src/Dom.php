<?php
/**
 * OriginPHP Framework
 * Copyright 2018 - 2021 Jamiel Sharief.
 *
 * Licensed under The MIT License
 * The above copyright notice and this permission notice shall be included in all copies or substantial
 * portions of the Software.
 *
 * @copyright   Copyright (c) Jamiel Sharief
 * @link        https://www.originphp.com
 * @license     https://opensource.org/licenses/mit-license.php MIT License
 */
declare(strict_types = 1);
namespace Origin\Dom;

use DOMDocument;
/**
* This extends the DOM extension, it gives the ability to use a javascript style query selectors
* to find elements.
*/
class Dom extends DOMDocument
{
    use QuerySelectorTrait;

    public function __construct(string $version = '', string $encoding = '')
    {
        parent::__construct($version, $encoding);
        $this->registerNodeClass('DOMElement', DomElement::class);
    }
}
