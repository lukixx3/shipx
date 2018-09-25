<?php
/**
 * Created by PhpStorm.
 * User: adrianadamiec
 * Date: 25.09.2018
 * Time: 08:10
 */

namespace Shoplo\ShipX\Model\Shipment;

use JMS\Serializer\Annotation as Serializer;

class ShipmentRequest
{
    /**
     * @var ReceiverRequest
     * @Serializer\Type("Shoplo\ShipX\Model\Shipment\ReceiverRequest")
     */
    public $receiver;

    /**
     * @var SenderRequest
     * @Serializer\Type("Shoplo\ShipX\Model\Shipment\SenderRequest")
     */
    public $sender;

    /**
     * @var ParcelRequest[]
     * @Serializer\Type("array<Shoplo\ShipX\Model\Shipment\ParcelRequest>")
     */
    public $parcels;

    /**
     * @var CustomAttributesRequest
     * @Serializer\Type("Shoplo\ShipX\Model\Shipment\CustomAttributesRequest")
     */
    public $customAttributes;

    /**
     * @var CODRequest
     * @Serializer\Type("Shoplo\ShipX\Model\Shipment\CODRequest")
     */
    public $cod;

    /**
     * @var InsuranceRequest
     * @Serializer\Type("Shoplo\ShipX\Model\Shipment\InsuranceRequest")
     */
    public $insurance;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    public $reference;

    /**
     * @var boolean
     * @Serializer\Type("boolean")
     */
    public $isReturn;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    public $service;

    /**
     * @var string[]
     * @Serializer\Type("array<string>")
     */
    public $additionalServices;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    public $externalCustomerId;

    /**
     * @var boolean
     * @Serializer\Type("boolean")
     */
    public $onlyChoiceOfOffer;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    public $trackingNumber;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    public $mpk;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    public $comments;
}