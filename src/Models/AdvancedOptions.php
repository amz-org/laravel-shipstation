<?php
namespace LaravelShipStation\Models;

class AdvancedOptions
{

    /**
     * @var int|null Specifies the warehouse where to the order is to ship from.
     * If the order was fulfilled using a fill provider, no warehouse is
     * attached to these orders and will result in a null value return.
     */
    public $warehouseId;

    /**
     * @var bool|null Specifies whether the order is non-machinable.
     */
    public $nonMachinable = false;

    /**
     * @var bool|null Specifies whether the order is to be delivered on a Saturday.
     */
    public $saturdayDelivery = false;

    /**
     * @var bool|null Specifies whether the order contains alcohol.
     */
    public $containsAlcohol = false;

    /**
     * @var int|null ID of store that is associated with the order. If not specified in
     * the CreateOrder call either to create or update an order, ShipStation
     * will default to the first manual store on the account.
     */
    public $storeId;

    /**
     * @var string|null Field that allows for custom data to be associated with an order. *Please see note below
     */
    public $customField1;

    /**
     * @var string|null Field that allows for custom data to be associated with an order. *Please see note below
     */
    public $customField2;

    /**
     * @var string|null Field that allows for custom data to be associated with an order. *Please see note below
     */
    public $customField3;

    /**
     * @var string|null Identifies the original source/marketplace of the order. *Please see note below
     */
    public $source;

    /**
     * @var string|null Identifies which party to bill.  Possible values: "my_account", "recipient", "third_party".
     */
    public $billToParty;

    /**
     * @var string|null Account number of billToParty.
     */
    public $billToAccount;

    /**
     * @var string|null Postal Code of billToParty.
     */
    public $billToPostalCode;

    /**
     * @var string|null Country Code of billToParty.
     */
    public $billToCountryCode;
}
