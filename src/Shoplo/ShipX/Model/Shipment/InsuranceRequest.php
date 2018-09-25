<?php
/**
 * Created by PhpStorm.
 * User: adrianadamiec
 * Date: 25.09.2018
 * Time: 08:08
 */

namespace Shoplo\ShipX\Model\Shipment;

use JMS\Serializer\Annotation as Serializer;

class InsuranceRequest
{
    /**
     * @var float
     * @Serializer\Type("float")
     */
    public $insuranceAmount;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    public $insuranceCurrency = 'PLN';
}