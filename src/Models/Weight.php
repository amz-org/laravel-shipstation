<?php
namespace LaravelShipStation\Models;

class Weight
{
    /**
     * @var float|int|null Weight value.
     */
    public $value;

    /**
     * @var string|null Units of weight. Allowed units are: "pounds", "ounces", or "grams"
     */
    public $units;
}
