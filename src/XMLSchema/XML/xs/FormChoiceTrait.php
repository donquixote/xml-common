<?php

declare(strict_types=1);

namespace SimpleSAML\XMLSchema\XML\xs;

use SimpleSAML\XMLSchema\Type\FormChoiceValue;

/**
 * Trait grouping common functionality for elements that can hold a formChoice attribute.
 *
 * @package simplesamlphp/xml-common
 */
trait FormChoiceTrait
{
    /**
     * The formChoice.
     *
     * @var \SimpleSAML\XMLSchema\Type\FormChoiceValue|null
     */
    protected ?FormChoiceValue $formChoice = null;


    /**
     * Collect the value of the formChoice-property
     *
     * @return \SimpleSAML\XMLSchema\Type\FormChoiceValue|null
     */
    public function getFormChoice(): ?FormChoiceValue
    {
        return $this->formChoice;
    }


    /**
     * Set the value of the formChoice-property
     *
     * @param \SimpleSAML\XMLSchema\Type\FormChoiceValue|null $formChoice
     */
    protected function setFormChoice(?FormChoiceValue $formChoice): void
    {
        $this->formChoice = $formChoice;
    }
}
