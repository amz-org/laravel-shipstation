<?php
namespace LaravelShipStation\Models;

class Order
{
    /**
     * @var string|null A user-defined order number used to identify an order.
     */
    public $orderNumber;

    /**
     * @var string|null A user-provided key that should be unique to each order.
     */
    public $orderKey;

    /**
     * @var string|null The date the order was placed.
     */
    public $orderDate;

    /**
     * @var string|null The date the order was paid for.
     */
    public $paymentDate;

    /**
     * @var string|null The date the order is to be shipped before or on.
     */
    public $shipByDate;

    /**
     * @var string|null The order's status: "awaiting_payment", "awaiting_shipment", "shipped", "on_hold", "cancelled"
     */
    public $orderStatus;

    /**
     * @var string|null Identifier for the customer in the originating system. This is typically a username or email address.
     */
    public $customerUsername;

    /**
     * @var string|null The customer's email address.
     */
    public $customerEmail;

    /**
     * @var Address|null The recipients billing address.
     */
    public $billTo;

    /**
     * @var Address|null The recipients shipping address.
     */
    public $shipTo;

    /**
     * @var OrderItem[]|null Array of purchased items.
     */
    public $items;

    /**
     * @var float|null The total amount paid for the Order.
     */
    public $amountPaid;

    /**
     * @var float|null The total tax amount for the Order.
     */
    public $taxAmount;

    /**
     * @var float|null Shipping amount paid by the customer, if any.
     */
    public $shippingAmount;

    /**
     * @var string|null Notes left by the customer when placing the order.
     */
    public $customerNotes;

    /**
     * @var string|null Private notes that are only visible to the seller.
     */
    public $internalNotes;

    /**
     * @var bool|null Specifies whether or not this Order is a gift
     */
    public $gift;

    /**
     * @var string|null Gift message left by the customer when placing the order.
     */
    public $giftMessage;

    /**
     * @var string|null Method of payment used by the customer.
     */
    public $paymentMethod;

    /**
     * @var string|null Identifies the shipping service selected by the customer when placing this order.
     */
    public $requestedShippingService;

    /**
     * @var string|null The code for the carrier that is to be used(or was used) when this order is shipped(was shipped).
     */
    public $carrierCode;

    /**
     * @var string|null The code for the shipping service that is to be used(or was used) when this order is/was shipped.
     */
    public $serviceCode;

    /**
     * @var string|null The code for the package type that is to be used(or was used) when this order is/was shipped
     */
    public $packageCode;

    /**
     * @var string|null The type of delivery confirmation that is to be used(or was used) when this order is/was shipped
     */
    public $confirmation;

    /**
     * @var string|null The date the order was shipped.
     */
    public $shipDate;

    /**
     * @var string|null If placed on hold, this date is the expiration date for this order's hold status.
     * The order is moved back to awaiting_shipment on this date.
     */
    public $holdUntilDate;

    /**
     * @var Weight|null Weight of the order.
     */
    public $weight;

    /**
     * @var Dimensions|null Dimensions of the order.
     */
    public $dimensions;

    /**
     * @var array|null The shipping insurance information associated with this order.
     */
    public $insuranceOptions;

    /**
     * @var InsuranceOptions|null Customs information that can be used to generate customs documents for international orders.
     */
    public $internationalOptions;

    /**
     * @var InternationalOptions|null Various advanced options that may be available depending on the shipping carrier
     * that is used to ship the order.
     */
    public $advancedOptions;

    /**
     * @var array|null Array of tagIds.Each tagId identifies a tag that has been associated with this order.
     */
    public $tagIds;
}
