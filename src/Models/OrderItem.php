<?php
namespace LaravelShipStation\Models;

class OrderItem
{

    /**
     * @var string|null An identifier for the OrderItem in the originating system.
     */
    public $lineItemKey;

    /**
     * @var string|null The SKU (stock keeping unit) identifier for the product associated with this line item.
     */
    public $sku;

    /**
     * @var string|null The name of the product associated with this line item.
     */
    public $name;

    /**
     * @var string|null The public URL to the product image.
     */
    public $imageUrl;

    /**
     * @var Weight|null The weight of a single item.
     */
    public $weight;

    /**
     * @var int|null The quantity of the product ordered.
     */
    public $quantity;

    /**
     * @var float|null The sell price of a single item specified by the order source.
     */
    public $unitPrice;

    /**
     * @var float|null The tax price of a single item specified by the order source.
     */
    public $taxAmount;

    /**
     * @var float|null The shipping amount or price of a single item specified by the order source.
     */
    public $shippingAmount;

    /**
     * @var string|null The location of the product within the seller's warehouse (e.g. Aisle 3, Shelf A, Bin 5)
     */
    public $warehouseLocation;

    /**
     * @var array|null
     */
    public $options;

    /**
     * @var int The identifier for the PRoduct Rsource associated with this OrderItem.
     */
    public $productId;

    /**
     * @var string|null The fulfillment SKU associated with this OrderItem if the fulfillment provider requires an
     * identifier other than the SKU.
     */
    public $fulfillmentSku;

    /**
     * @var bool|null Indicates that the OrderItem is a non-physical adjustment to the order
     * (e.g. a discount or promotional code).
     */
    public $adjustment = false;

    /**
     * @var string|null UPC associated with this OrderItem.
     */
    public $upc;
}
