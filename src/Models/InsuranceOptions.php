<?php
namespace LaravelShipStation\Models;

class InsuranceOptions
{
    /**
     * @var string|null Preferred Insurance provider. Available options: "shipsurance" or "carrier"
     */
    public $provider;

    /**
     * @var bool|null Indicates whether shipment should be insured.
     */
    public $insureShipment;

    /**
     * @var float|null Value to insure.
     */
    public $insuredValue;
}
