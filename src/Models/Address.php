<?php
namespace LaravelShipStation\Models;

class Address
{
    /**
     * @var string|null Name of person
     */
    public $name;

    /**
     * @var string|null Name of company
     */
    public $company;

    /**
     * @var string|null First line of address
     */
    public $street1;

    /**
     * @var string|null Second line of address
     */
    public $street2;

    /**
     * @var string|null Third line of address
     */
    public $street3;

    /**
     * @var string|null City
     */
    public $city;

    /**
     * @var string|null State
     */
    public $state;

    /**
     * @var string|null Postal Code
     */
    public $postalCode;

    /**
     * @var string|null Country Code. The two-cahracter ISO country code is required.
     */
    public $country;

    /**
     * @var string|null Telephone number.
     */
    public $phone;

    /**
     * @var bool|null Specifies whether the given address is residential.
     */
    public $residential;
}
