<?php
namespace LaravelShipStation\Models;

class Dimensions
{
    /**
     * @var int|float|null Length of package.
     */
    public $length;

    /**
     * @var int|float|null Width of package.
     */
    public $width;

    /**
     * @var int|float|null Height of package.
     */
    public $height;

    /**
     * @var string|null Units of measurement. Allowed units are: "inches", or "centimeters".
     */
    public $units;
}
