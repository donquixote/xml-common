<?php

declare(strict_types=1);

namespace SimpleSAML\XMLSchema\Type;

use SimpleSAML\XML\Assert\Assert;
use SimpleSAML\XMLSchema\Exception\SchemaViolationException;

/**
 * @package simplesaml/xml-common
 */
class UnsignedByteValue extends NonNegativeIntegerValue
{
    /** @var string */
    public const SCHEMA_TYPE = 'unsignedByte';


    /**
     * Validate the value.
     *
     * @param string $value
     * @throws \SimpleSAML\XMLSchema\Exception\SchemaViolationException on failure
     * @return void
     */
    protected function validateValue(string $value): void
    {
        Assert::validUnsignedByte($this->sanitizeValue($value), SchemaViolationException::class);
    }
}
