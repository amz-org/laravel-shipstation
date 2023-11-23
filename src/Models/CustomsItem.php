<?php
namespace LaravelShipStation\Models;

class CustomsItem
{
    /**
     * @var string|null A short description of the CustomItem
     */
    public $description;

    /**
     * @var int|null The quantity for this line item.
     */
    public $quantity;

    /**
     * @var float|null The value (in USD) of the line item.
     */
    public $value;

    /**
     * @var string|null The Harmonized Commodity Code for this line item.
     */
    public $harmonizedTariffCode;

    /**
     * @var string|null The 2-character ISO country code where the item originated.
     */
    public $countryOfOrigin;
}
