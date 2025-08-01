<?php

declare(strict_types=1);

namespace SimpleSAML\XMLSchema\XML;

use SimpleSAML\XML\AbstractElement as BaseElement;
use SimpleSAML\XMLSchema\Constants as C;

/**
 * Abstract class to be implemented by all the classes in this namespace
 *
 * @package simplesamlphp/xml-common
 */
abstract class AbstractXsElement extends BaseElement
{
    /** @var string */
    public const NS = C::NS_XS;

    /** @var string */
    public const NS_PREFIX = 'xs';

    /** @var string */
    public const SCHEMA = 'resources/schemas/XMLSchema.xsd';
}
