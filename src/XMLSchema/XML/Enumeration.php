<?php

declare(strict_types=1);

namespace SimpleSAML\XMLSchema\XML;

use SimpleSAML\XML\{SchemaValidatableElementInterface, SchemaValidatableElementTrait};
use SimpleSAML\XMLSchema\XML\Interface\FacetInterface;

/**
 * Class representing the enumeration element
 *
 * @package simplesamlphp/xml-common
 */
final class Enumeration extends AbstractNoFixedFacet implements SchemaValidatableElementInterface, FacetInterface
{
    use SchemaValidatableElementTrait;

    /** @var string */
    public const LOCALNAME = 'enumeration';
}
