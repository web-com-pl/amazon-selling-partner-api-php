<?php
/**
 * FinancialEventsV0
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  Webcom\Amazon\Rest\FinancesApiV0
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Selling Partner API for Finances
 *
 * The Selling Partner API for Finances helps you obtain financial information relevant to a seller's business. You can obtain financial events for a given order, financial event group, or date range without having to wait until a statement period closes. You can also obtain financial event groups for a given date range.
 *
 * The version of the OpenAPI document: v0
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Webcom\Amazon\Rest\FinancesApiV0\Model;

use \Webcom\Amazon\Rest\ModelInterface;
use \ArrayAccess;
use \Webcom\Amazon\Rest\ObjectSerializer;

/**
 * FinancialEventsV0 Class Doc Comment
 *
 * @category Class
 * @description Contains all information related to a financial event.
 * @package  Webcom\Amazon\Rest\FinancesApiV0
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class FinancialEventsV0 implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'FinancialEvents';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'shipmentEventList' => '\Webcom\Amazon\Rest\FinancesApiV0\Model\ShipmentEventV0[]',
        'refundEventList' => '\Webcom\Amazon\Rest\FinancesApiV0\Model\ShipmentEventV0[]',
        'guaranteeClaimEventList' => '\Webcom\Amazon\Rest\FinancesApiV0\Model\ShipmentEventV0[]',
        'chargebackEventList' => '\Webcom\Amazon\Rest\FinancesApiV0\Model\ShipmentEventV0[]',
        'payWithAmazonEventList' => '\Webcom\Amazon\Rest\FinancesApiV0\Model\PayWithAmazonEventV0[]',
        'serviceProviderCreditEventList' => '\Webcom\Amazon\Rest\FinancesApiV0\Model\SolutionProviderCreditEventV0[]',
        'retrochargeEventList' => '\Webcom\Amazon\Rest\FinancesApiV0\Model\RetrochargeEventV0[]',
        'rentalTransactionEventList' => '\Webcom\Amazon\Rest\FinancesApiV0\Model\RentalTransactionEventV0[]',
        'productAdsPaymentEventList' => '\Webcom\Amazon\Rest\FinancesApiV0\Model\ProductAdsPaymentEventV0[]',
        'serviceFeeEventList' => '\Webcom\Amazon\Rest\FinancesApiV0\Model\ServiceFeeEventV0[]',
        'sellerDealPaymentEventList' => '\Webcom\Amazon\Rest\FinancesApiV0\Model\SellerDealPaymentEventV0[]',
        'debtRecoveryEventList' => '\Webcom\Amazon\Rest\FinancesApiV0\Model\DebtRecoveryEventV0[]',
        'loanServicingEventList' => '\Webcom\Amazon\Rest\FinancesApiV0\Model\LoanServicingEventV0[]',
        'adjustmentEventList' => '\Webcom\Amazon\Rest\FinancesApiV0\Model\AdjustmentEventV0[]',
        'sAFETReimbursementEventList' => '\Webcom\Amazon\Rest\FinancesApiV0\Model\SAFETReimbursementEventV0[]',
        'sellerReviewEnrollmentPaymentEventList' => '\Webcom\Amazon\Rest\FinancesApiV0\Model\SellerReviewEnrollmentPaymentEventV0[]',
        'fBALiquidationEventList' => '\Webcom\Amazon\Rest\FinancesApiV0\Model\FBALiquidationEventV0[]',
        'couponPaymentEventList' => '\Webcom\Amazon\Rest\FinancesApiV0\Model\CouponPaymentEventV0[]',
        'imagingServicesFeeEventList' => '\Webcom\Amazon\Rest\FinancesApiV0\Model\ImagingServicesFeeEventV0[]',
        'networkComminglingTransactionEventList' => '\Webcom\Amazon\Rest\FinancesApiV0\Model\NetworkComminglingTransactionEventV0[]',
        'affordabilityExpenseEventList' => '\Webcom\Amazon\Rest\FinancesApiV0\Model\AffordabilityExpenseEventV0[]',
        'affordabilityExpenseReversalEventList' => '\Webcom\Amazon\Rest\FinancesApiV0\Model\AffordabilityExpenseEventV0[]',
        'trialShipmentEventList' => '\Webcom\Amazon\Rest\FinancesApiV0\Model\TrialShipmentEventV0[]',
        'shipmentSettleEventList' => '\Webcom\Amazon\Rest\FinancesApiV0\Model\ShipmentEventV0[]',
        'taxWithholdingEventList' => '\Webcom\Amazon\Rest\FinancesApiV0\Model\TaxWithholdingEventV0[]',
        'removalShipmentEventList' => '\Webcom\Amazon\Rest\FinancesApiV0\Model\RemovalShipmentEventV0[]',
        'removalShipmentAdjustmentEventList' => '\Webcom\Amazon\Rest\FinancesApiV0\Model\RemovalShipmentAdjustmentEventV0[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'shipmentEventList' => null,
        'refundEventList' => null,
        'guaranteeClaimEventList' => null,
        'chargebackEventList' => null,
        'payWithAmazonEventList' => null,
        'serviceProviderCreditEventList' => null,
        'retrochargeEventList' => null,
        'rentalTransactionEventList' => null,
        'productAdsPaymentEventList' => null,
        'serviceFeeEventList' => null,
        'sellerDealPaymentEventList' => null,
        'debtRecoveryEventList' => null,
        'loanServicingEventList' => null,
        'adjustmentEventList' => null,
        'sAFETReimbursementEventList' => null,
        'sellerReviewEnrollmentPaymentEventList' => null,
        'fBALiquidationEventList' => null,
        'couponPaymentEventList' => null,
        'imagingServicesFeeEventList' => null,
        'networkComminglingTransactionEventList' => null,
        'affordabilityExpenseEventList' => null,
        'affordabilityExpenseReversalEventList' => null,
        'trialShipmentEventList' => null,
        'shipmentSettleEventList' => null,
        'taxWithholdingEventList' => null,
        'removalShipmentEventList' => null,
        'removalShipmentAdjustmentEventList' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'shipmentEventList' => 'ShipmentEventList',
        'refundEventList' => 'RefundEventList',
        'guaranteeClaimEventList' => 'GuaranteeClaimEventList',
        'chargebackEventList' => 'ChargebackEventList',
        'payWithAmazonEventList' => 'PayWithAmazonEventList',
        'serviceProviderCreditEventList' => 'ServiceProviderCreditEventList',
        'retrochargeEventList' => 'RetrochargeEventList',
        'rentalTransactionEventList' => 'RentalTransactionEventList',
        'productAdsPaymentEventList' => 'ProductAdsPaymentEventList',
        'serviceFeeEventList' => 'ServiceFeeEventList',
        'sellerDealPaymentEventList' => 'SellerDealPaymentEventList',
        'debtRecoveryEventList' => 'DebtRecoveryEventList',
        'loanServicingEventList' => 'LoanServicingEventList',
        'adjustmentEventList' => 'AdjustmentEventList',
        'sAFETReimbursementEventList' => 'SAFETReimbursementEventList',
        'sellerReviewEnrollmentPaymentEventList' => 'SellerReviewEnrollmentPaymentEventList',
        'fBALiquidationEventList' => 'FBALiquidationEventList',
        'couponPaymentEventList' => 'CouponPaymentEventList',
        'imagingServicesFeeEventList' => 'ImagingServicesFeeEventList',
        'networkComminglingTransactionEventList' => 'NetworkComminglingTransactionEventList',
        'affordabilityExpenseEventList' => 'AffordabilityExpenseEventList',
        'affordabilityExpenseReversalEventList' => 'AffordabilityExpenseReversalEventList',
        'trialShipmentEventList' => 'TrialShipmentEventList',
        'shipmentSettleEventList' => 'ShipmentSettleEventList',
        'taxWithholdingEventList' => 'TaxWithholdingEventList',
        'removalShipmentEventList' => 'RemovalShipmentEventList',
        'removalShipmentAdjustmentEventList' => 'RemovalShipmentAdjustmentEventList'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'shipmentEventList' => 'setShipmentEventList',
        'refundEventList' => 'setRefundEventList',
        'guaranteeClaimEventList' => 'setGuaranteeClaimEventList',
        'chargebackEventList' => 'setChargebackEventList',
        'payWithAmazonEventList' => 'setPayWithAmazonEventList',
        'serviceProviderCreditEventList' => 'setServiceProviderCreditEventList',
        'retrochargeEventList' => 'setRetrochargeEventList',
        'rentalTransactionEventList' => 'setRentalTransactionEventList',
        'productAdsPaymentEventList' => 'setProductAdsPaymentEventList',
        'serviceFeeEventList' => 'setServiceFeeEventList',
        'sellerDealPaymentEventList' => 'setSellerDealPaymentEventList',
        'debtRecoveryEventList' => 'setDebtRecoveryEventList',
        'loanServicingEventList' => 'setLoanServicingEventList',
        'adjustmentEventList' => 'setAdjustmentEventList',
        'sAFETReimbursementEventList' => 'setSAFETReimbursementEventList',
        'sellerReviewEnrollmentPaymentEventList' => 'setSellerReviewEnrollmentPaymentEventList',
        'fBALiquidationEventList' => 'setFBALiquidationEventList',
        'couponPaymentEventList' => 'setCouponPaymentEventList',
        'imagingServicesFeeEventList' => 'setImagingServicesFeeEventList',
        'networkComminglingTransactionEventList' => 'setNetworkComminglingTransactionEventList',
        'affordabilityExpenseEventList' => 'setAffordabilityExpenseEventList',
        'affordabilityExpenseReversalEventList' => 'setAffordabilityExpenseReversalEventList',
        'trialShipmentEventList' => 'setTrialShipmentEventList',
        'shipmentSettleEventList' => 'setShipmentSettleEventList',
        'taxWithholdingEventList' => 'setTaxWithholdingEventList',
        'removalShipmentEventList' => 'setRemovalShipmentEventList',
        'removalShipmentAdjustmentEventList' => 'setRemovalShipmentAdjustmentEventList'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'shipmentEventList' => 'getShipmentEventList',
        'refundEventList' => 'getRefundEventList',
        'guaranteeClaimEventList' => 'getGuaranteeClaimEventList',
        'chargebackEventList' => 'getChargebackEventList',
        'payWithAmazonEventList' => 'getPayWithAmazonEventList',
        'serviceProviderCreditEventList' => 'getServiceProviderCreditEventList',
        'retrochargeEventList' => 'getRetrochargeEventList',
        'rentalTransactionEventList' => 'getRentalTransactionEventList',
        'productAdsPaymentEventList' => 'getProductAdsPaymentEventList',
        'serviceFeeEventList' => 'getServiceFeeEventList',
        'sellerDealPaymentEventList' => 'getSellerDealPaymentEventList',
        'debtRecoveryEventList' => 'getDebtRecoveryEventList',
        'loanServicingEventList' => 'getLoanServicingEventList',
        'adjustmentEventList' => 'getAdjustmentEventList',
        'sAFETReimbursementEventList' => 'getSAFETReimbursementEventList',
        'sellerReviewEnrollmentPaymentEventList' => 'getSellerReviewEnrollmentPaymentEventList',
        'fBALiquidationEventList' => 'getFBALiquidationEventList',
        'couponPaymentEventList' => 'getCouponPaymentEventList',
        'imagingServicesFeeEventList' => 'getImagingServicesFeeEventList',
        'networkComminglingTransactionEventList' => 'getNetworkComminglingTransactionEventList',
        'affordabilityExpenseEventList' => 'getAffordabilityExpenseEventList',
        'affordabilityExpenseReversalEventList' => 'getAffordabilityExpenseReversalEventList',
        'trialShipmentEventList' => 'getTrialShipmentEventList',
        'shipmentSettleEventList' => 'getShipmentSettleEventList',
        'taxWithholdingEventList' => 'getTaxWithholdingEventList',
        'removalShipmentEventList' => 'getRemovalShipmentEventList',
        'removalShipmentAdjustmentEventList' => 'getRemovalShipmentAdjustmentEventList'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['shipmentEventList'] = $data['shipmentEventList'] ?? null;
        $this->container['refundEventList'] = $data['refundEventList'] ?? null;
        $this->container['guaranteeClaimEventList'] = $data['guaranteeClaimEventList'] ?? null;
        $this->container['chargebackEventList'] = $data['chargebackEventList'] ?? null;
        $this->container['payWithAmazonEventList'] = $data['payWithAmazonEventList'] ?? null;
        $this->container['serviceProviderCreditEventList'] = $data['serviceProviderCreditEventList'] ?? null;
        $this->container['retrochargeEventList'] = $data['retrochargeEventList'] ?? null;
        $this->container['rentalTransactionEventList'] = $data['rentalTransactionEventList'] ?? null;
        $this->container['productAdsPaymentEventList'] = $data['productAdsPaymentEventList'] ?? null;
        $this->container['serviceFeeEventList'] = $data['serviceFeeEventList'] ?? null;
        $this->container['sellerDealPaymentEventList'] = $data['sellerDealPaymentEventList'] ?? null;
        $this->container['debtRecoveryEventList'] = $data['debtRecoveryEventList'] ?? null;
        $this->container['loanServicingEventList'] = $data['loanServicingEventList'] ?? null;
        $this->container['adjustmentEventList'] = $data['adjustmentEventList'] ?? null;
        $this->container['sAFETReimbursementEventList'] = $data['sAFETReimbursementEventList'] ?? null;
        $this->container['sellerReviewEnrollmentPaymentEventList'] = $data['sellerReviewEnrollmentPaymentEventList'] ?? null;
        $this->container['fBALiquidationEventList'] = $data['fBALiquidationEventList'] ?? null;
        $this->container['couponPaymentEventList'] = $data['couponPaymentEventList'] ?? null;
        $this->container['imagingServicesFeeEventList'] = $data['imagingServicesFeeEventList'] ?? null;
        $this->container['networkComminglingTransactionEventList'] = $data['networkComminglingTransactionEventList'] ?? null;
        $this->container['affordabilityExpenseEventList'] = $data['affordabilityExpenseEventList'] ?? null;
        $this->container['affordabilityExpenseReversalEventList'] = $data['affordabilityExpenseReversalEventList'] ?? null;
        $this->container['trialShipmentEventList'] = $data['trialShipmentEventList'] ?? null;
        $this->container['shipmentSettleEventList'] = $data['shipmentSettleEventList'] ?? null;
        $this->container['taxWithholdingEventList'] = $data['taxWithholdingEventList'] ?? null;
        $this->container['removalShipmentEventList'] = $data['removalShipmentEventList'] ?? null;
        $this->container['removalShipmentAdjustmentEventList'] = $data['removalShipmentAdjustmentEventList'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets shipmentEventList
     *
     * @return \Webcom\Amazon\Rest\FinancesApiV0\Model\ShipmentEventV0[]|null
     */
    public function getShipmentEventList()
    {
        return $this->container['shipmentEventList'];
    }

    /**
     * Sets shipmentEventList
     *
     * @param \Webcom\Amazon\Rest\FinancesApiV0\Model\ShipmentEventV0[]|null $shipmentEventList A list of shipment event information.
     *
     * @return self
     */
    public function setShipmentEventList($shipmentEventList)
    {
        $this->container['shipmentEventList'] = $shipmentEventList;

        return $this;
    }

    /**
     * Gets refundEventList
     *
     * @return \Webcom\Amazon\Rest\FinancesApiV0\Model\ShipmentEventV0[]|null
     */
    public function getRefundEventList()
    {
        return $this->container['refundEventList'];
    }

    /**
     * Sets refundEventList
     *
     * @param \Webcom\Amazon\Rest\FinancesApiV0\Model\ShipmentEventV0[]|null $refundEventList A list of shipment event information.
     *
     * @return self
     */
    public function setRefundEventList($refundEventList)
    {
        $this->container['refundEventList'] = $refundEventList;

        return $this;
    }

    /**
     * Gets guaranteeClaimEventList
     *
     * @return \Webcom\Amazon\Rest\FinancesApiV0\Model\ShipmentEventV0[]|null
     */
    public function getGuaranteeClaimEventList()
    {
        return $this->container['guaranteeClaimEventList'];
    }

    /**
     * Sets guaranteeClaimEventList
     *
     * @param \Webcom\Amazon\Rest\FinancesApiV0\Model\ShipmentEventV0[]|null $guaranteeClaimEventList A list of shipment event information.
     *
     * @return self
     */
    public function setGuaranteeClaimEventList($guaranteeClaimEventList)
    {
        $this->container['guaranteeClaimEventList'] = $guaranteeClaimEventList;

        return $this;
    }

    /**
     * Gets chargebackEventList
     *
     * @return \Webcom\Amazon\Rest\FinancesApiV0\Model\ShipmentEventV0[]|null
     */
    public function getChargebackEventList()
    {
        return $this->container['chargebackEventList'];
    }

    /**
     * Sets chargebackEventList
     *
     * @param \Webcom\Amazon\Rest\FinancesApiV0\Model\ShipmentEventV0[]|null $chargebackEventList A list of shipment event information.
     *
     * @return self
     */
    public function setChargebackEventList($chargebackEventList)
    {
        $this->container['chargebackEventList'] = $chargebackEventList;

        return $this;
    }

    /**
     * Gets payWithAmazonEventList
     *
     * @return \Webcom\Amazon\Rest\FinancesApiV0\Model\PayWithAmazonEventV0[]|null
     */
    public function getPayWithAmazonEventList()
    {
        return $this->container['payWithAmazonEventList'];
    }

    /**
     * Sets payWithAmazonEventList
     *
     * @param \Webcom\Amazon\Rest\FinancesApiV0\Model\PayWithAmazonEventV0[]|null $payWithAmazonEventList A list of events related to the seller's Pay with Amazon account.
     *
     * @return self
     */
    public function setPayWithAmazonEventList($payWithAmazonEventList)
    {
        $this->container['payWithAmazonEventList'] = $payWithAmazonEventList;

        return $this;
    }

    /**
     * Gets serviceProviderCreditEventList
     *
     * @return \Webcom\Amazon\Rest\FinancesApiV0\Model\SolutionProviderCreditEventV0[]|null
     */
    public function getServiceProviderCreditEventList()
    {
        return $this->container['serviceProviderCreditEventList'];
    }

    /**
     * Sets serviceProviderCreditEventList
     *
     * @param \Webcom\Amazon\Rest\FinancesApiV0\Model\SolutionProviderCreditEventV0[]|null $serviceProviderCreditEventList A list of information about solution provider credits.
     *
     * @return self
     */
    public function setServiceProviderCreditEventList($serviceProviderCreditEventList)
    {
        $this->container['serviceProviderCreditEventList'] = $serviceProviderCreditEventList;

        return $this;
    }

    /**
     * Gets retrochargeEventList
     *
     * @return \Webcom\Amazon\Rest\FinancesApiV0\Model\RetrochargeEventV0[]|null
     */
    public function getRetrochargeEventList()
    {
        return $this->container['retrochargeEventList'];
    }

    /**
     * Sets retrochargeEventList
     *
     * @param \Webcom\Amazon\Rest\FinancesApiV0\Model\RetrochargeEventV0[]|null $retrochargeEventList A list of information about Retrocharge or RetrochargeReversal events.
     *
     * @return self
     */
    public function setRetrochargeEventList($retrochargeEventList)
    {
        $this->container['retrochargeEventList'] = $retrochargeEventList;

        return $this;
    }

    /**
     * Gets rentalTransactionEventList
     *
     * @return \Webcom\Amazon\Rest\FinancesApiV0\Model\RentalTransactionEventV0[]|null
     */
    public function getRentalTransactionEventList()
    {
        return $this->container['rentalTransactionEventList'];
    }

    /**
     * Sets rentalTransactionEventList
     *
     * @param \Webcom\Amazon\Rest\FinancesApiV0\Model\RentalTransactionEventV0[]|null $rentalTransactionEventList A list of rental transaction event information.
     *
     * @return self
     */
    public function setRentalTransactionEventList($rentalTransactionEventList)
    {
        $this->container['rentalTransactionEventList'] = $rentalTransactionEventList;

        return $this;
    }

    /**
     * Gets productAdsPaymentEventList
     *
     * @return \Webcom\Amazon\Rest\FinancesApiV0\Model\ProductAdsPaymentEventV0[]|null
     */
    public function getProductAdsPaymentEventList()
    {
        return $this->container['productAdsPaymentEventList'];
    }

    /**
     * Sets productAdsPaymentEventList
     *
     * @param \Webcom\Amazon\Rest\FinancesApiV0\Model\ProductAdsPaymentEventV0[]|null $productAdsPaymentEventList A list of sponsored products payment events.
     *
     * @return self
     */
    public function setProductAdsPaymentEventList($productAdsPaymentEventList)
    {
        $this->container['productAdsPaymentEventList'] = $productAdsPaymentEventList;

        return $this;
    }

    /**
     * Gets serviceFeeEventList
     *
     * @return \Webcom\Amazon\Rest\FinancesApiV0\Model\ServiceFeeEventV0[]|null
     */
    public function getServiceFeeEventList()
    {
        return $this->container['serviceFeeEventList'];
    }

    /**
     * Sets serviceFeeEventList
     *
     * @param \Webcom\Amazon\Rest\FinancesApiV0\Model\ServiceFeeEventV0[]|null $serviceFeeEventList A list of information about service fee events.
     *
     * @return self
     */
    public function setServiceFeeEventList($serviceFeeEventList)
    {
        $this->container['serviceFeeEventList'] = $serviceFeeEventList;

        return $this;
    }

    /**
     * Gets sellerDealPaymentEventList
     *
     * @return \Webcom\Amazon\Rest\FinancesApiV0\Model\SellerDealPaymentEventV0[]|null
     */
    public function getSellerDealPaymentEventList()
    {
        return $this->container['sellerDealPaymentEventList'];
    }

    /**
     * Sets sellerDealPaymentEventList
     *
     * @param \Webcom\Amazon\Rest\FinancesApiV0\Model\SellerDealPaymentEventV0[]|null $sellerDealPaymentEventList A list of payment events for deal-related fees.
     *
     * @return self
     */
    public function setSellerDealPaymentEventList($sellerDealPaymentEventList)
    {
        $this->container['sellerDealPaymentEventList'] = $sellerDealPaymentEventList;

        return $this;
    }

    /**
     * Gets debtRecoveryEventList
     *
     * @return \Webcom\Amazon\Rest\FinancesApiV0\Model\DebtRecoveryEventV0[]|null
     */
    public function getDebtRecoveryEventList()
    {
        return $this->container['debtRecoveryEventList'];
    }

    /**
     * Sets debtRecoveryEventList
     *
     * @param \Webcom\Amazon\Rest\FinancesApiV0\Model\DebtRecoveryEventV0[]|null $debtRecoveryEventList A list of debt recovery event information.
     *
     * @return self
     */
    public function setDebtRecoveryEventList($debtRecoveryEventList)
    {
        $this->container['debtRecoveryEventList'] = $debtRecoveryEventList;

        return $this;
    }

    /**
     * Gets loanServicingEventList
     *
     * @return \Webcom\Amazon\Rest\FinancesApiV0\Model\LoanServicingEventV0[]|null
     */
    public function getLoanServicingEventList()
    {
        return $this->container['loanServicingEventList'];
    }

    /**
     * Sets loanServicingEventList
     *
     * @param \Webcom\Amazon\Rest\FinancesApiV0\Model\LoanServicingEventV0[]|null $loanServicingEventList A list of loan servicing events.
     *
     * @return self
     */
    public function setLoanServicingEventList($loanServicingEventList)
    {
        $this->container['loanServicingEventList'] = $loanServicingEventList;

        return $this;
    }

    /**
     * Gets adjustmentEventList
     *
     * @return \Webcom\Amazon\Rest\FinancesApiV0\Model\AdjustmentEventV0[]|null
     */
    public function getAdjustmentEventList()
    {
        return $this->container['adjustmentEventList'];
    }

    /**
     * Sets adjustmentEventList
     *
     * @param \Webcom\Amazon\Rest\FinancesApiV0\Model\AdjustmentEventV0[]|null $adjustmentEventList A list of adjustment event information for the seller's account.
     *
     * @return self
     */
    public function setAdjustmentEventList($adjustmentEventList)
    {
        $this->container['adjustmentEventList'] = $adjustmentEventList;

        return $this;
    }

    /**
     * Gets sAFETReimbursementEventList
     *
     * @return \Webcom\Amazon\Rest\FinancesApiV0\Model\SAFETReimbursementEventV0[]|null
     */
    public function getSAFETReimbursementEventList()
    {
        return $this->container['sAFETReimbursementEventList'];
    }

    /**
     * Sets sAFETReimbursementEventList
     *
     * @param \Webcom\Amazon\Rest\FinancesApiV0\Model\SAFETReimbursementEventV0[]|null $sAFETReimbursementEventList A list of SAFETReimbursementEvents.
     *
     * @return self
     */
    public function setSAFETReimbursementEventList($sAFETReimbursementEventList)
    {
        $this->container['sAFETReimbursementEventList'] = $sAFETReimbursementEventList;

        return $this;
    }

    /**
     * Gets sellerReviewEnrollmentPaymentEventList
     *
     * @return \Webcom\Amazon\Rest\FinancesApiV0\Model\SellerReviewEnrollmentPaymentEventV0[]|null
     */
    public function getSellerReviewEnrollmentPaymentEventList()
    {
        return $this->container['sellerReviewEnrollmentPaymentEventList'];
    }

    /**
     * Sets sellerReviewEnrollmentPaymentEventList
     *
     * @param \Webcom\Amazon\Rest\FinancesApiV0\Model\SellerReviewEnrollmentPaymentEventV0[]|null $sellerReviewEnrollmentPaymentEventList A list of information about fee events for the Early Reviewer Program.
     *
     * @return self
     */
    public function setSellerReviewEnrollmentPaymentEventList($sellerReviewEnrollmentPaymentEventList)
    {
        $this->container['sellerReviewEnrollmentPaymentEventList'] = $sellerReviewEnrollmentPaymentEventList;

        return $this;
    }

    /**
     * Gets fBALiquidationEventList
     *
     * @return \Webcom\Amazon\Rest\FinancesApiV0\Model\FBALiquidationEventV0[]|null
     */
    public function getFBALiquidationEventList()
    {
        return $this->container['fBALiquidationEventList'];
    }

    /**
     * Sets fBALiquidationEventList
     *
     * @param \Webcom\Amazon\Rest\FinancesApiV0\Model\FBALiquidationEventV0[]|null $fBALiquidationEventList A list of FBA inventory liquidation payment events.
     *
     * @return self
     */
    public function setFBALiquidationEventList($fBALiquidationEventList)
    {
        $this->container['fBALiquidationEventList'] = $fBALiquidationEventList;

        return $this;
    }

    /**
     * Gets couponPaymentEventList
     *
     * @return \Webcom\Amazon\Rest\FinancesApiV0\Model\CouponPaymentEventV0[]|null
     */
    public function getCouponPaymentEventList()
    {
        return $this->container['couponPaymentEventList'];
    }

    /**
     * Sets couponPaymentEventList
     *
     * @param \Webcom\Amazon\Rest\FinancesApiV0\Model\CouponPaymentEventV0[]|null $couponPaymentEventList A list of coupon payment event information.
     *
     * @return self
     */
    public function setCouponPaymentEventList($couponPaymentEventList)
    {
        $this->container['couponPaymentEventList'] = $couponPaymentEventList;

        return $this;
    }

    /**
     * Gets imagingServicesFeeEventList
     *
     * @return \Webcom\Amazon\Rest\FinancesApiV0\Model\ImagingServicesFeeEventV0[]|null
     */
    public function getImagingServicesFeeEventList()
    {
        return $this->container['imagingServicesFeeEventList'];
    }

    /**
     * Sets imagingServicesFeeEventList
     *
     * @param \Webcom\Amazon\Rest\FinancesApiV0\Model\ImagingServicesFeeEventV0[]|null $imagingServicesFeeEventList A list of fee events related to Amazon Imaging services.
     *
     * @return self
     */
    public function setImagingServicesFeeEventList($imagingServicesFeeEventList)
    {
        $this->container['imagingServicesFeeEventList'] = $imagingServicesFeeEventList;

        return $this;
    }

    /**
     * Gets networkComminglingTransactionEventList
     *
     * @return \Webcom\Amazon\Rest\FinancesApiV0\Model\NetworkComminglingTransactionEventV0[]|null
     */
    public function getNetworkComminglingTransactionEventList()
    {
        return $this->container['networkComminglingTransactionEventList'];
    }

    /**
     * Sets networkComminglingTransactionEventList
     *
     * @param \Webcom\Amazon\Rest\FinancesApiV0\Model\NetworkComminglingTransactionEventV0[]|null $networkComminglingTransactionEventList A list of network commingling transaction events.
     *
     * @return self
     */
    public function setNetworkComminglingTransactionEventList($networkComminglingTransactionEventList)
    {
        $this->container['networkComminglingTransactionEventList'] = $networkComminglingTransactionEventList;

        return $this;
    }

    /**
     * Gets affordabilityExpenseEventList
     *
     * @return \Webcom\Amazon\Rest\FinancesApiV0\Model\AffordabilityExpenseEventV0[]|null
     */
    public function getAffordabilityExpenseEventList()
    {
        return $this->container['affordabilityExpenseEventList'];
    }

    /**
     * Sets affordabilityExpenseEventList
     *
     * @param \Webcom\Amazon\Rest\FinancesApiV0\Model\AffordabilityExpenseEventV0[]|null $affordabilityExpenseEventList A list of expense information related to an affordability promotion.
     *
     * @return self
     */
    public function setAffordabilityExpenseEventList($affordabilityExpenseEventList)
    {
        $this->container['affordabilityExpenseEventList'] = $affordabilityExpenseEventList;

        return $this;
    }

    /**
     * Gets affordabilityExpenseReversalEventList
     *
     * @return \Webcom\Amazon\Rest\FinancesApiV0\Model\AffordabilityExpenseEventV0[]|null
     */
    public function getAffordabilityExpenseReversalEventList()
    {
        return $this->container['affordabilityExpenseReversalEventList'];
    }

    /**
     * Sets affordabilityExpenseReversalEventList
     *
     * @param \Webcom\Amazon\Rest\FinancesApiV0\Model\AffordabilityExpenseEventV0[]|null $affordabilityExpenseReversalEventList A list of expense information related to an affordability promotion.
     *
     * @return self
     */
    public function setAffordabilityExpenseReversalEventList($affordabilityExpenseReversalEventList)
    {
        $this->container['affordabilityExpenseReversalEventList'] = $affordabilityExpenseReversalEventList;

        return $this;
    }

    /**
     * Gets trialShipmentEventList
     *
     * @return \Webcom\Amazon\Rest\FinancesApiV0\Model\TrialShipmentEventV0[]|null
     */
    public function getTrialShipmentEventList()
    {
        return $this->container['trialShipmentEventList'];
    }

    /**
     * Sets trialShipmentEventList
     *
     * @param \Webcom\Amazon\Rest\FinancesApiV0\Model\TrialShipmentEventV0[]|null $trialShipmentEventList A list of information about trial shipment financial events.
     *
     * @return self
     */
    public function setTrialShipmentEventList($trialShipmentEventList)
    {
        $this->container['trialShipmentEventList'] = $trialShipmentEventList;

        return $this;
    }

    /**
     * Gets shipmentSettleEventList
     *
     * @return \Webcom\Amazon\Rest\FinancesApiV0\Model\ShipmentEventV0[]|null
     */
    public function getShipmentSettleEventList()
    {
        return $this->container['shipmentSettleEventList'];
    }

    /**
     * Sets shipmentSettleEventList
     *
     * @param \Webcom\Amazon\Rest\FinancesApiV0\Model\ShipmentEventV0[]|null $shipmentSettleEventList A list of information about shipment settle financial events.
     *
     * @return self
     */
    public function setShipmentSettleEventList($shipmentSettleEventList)
    {
        $this->container['shipmentSettleEventList'] = $shipmentSettleEventList;

        return $this;
    }

    /**
     * Gets taxWithholdingEventList
     *
     * @return \Webcom\Amazon\Rest\FinancesApiV0\Model\TaxWithholdingEventV0[]|null
     */
    public function getTaxWithholdingEventList()
    {
        return $this->container['taxWithholdingEventList'];
    }

    /**
     * Sets taxWithholdingEventList
     *
     * @param \Webcom\Amazon\Rest\FinancesApiV0\Model\TaxWithholdingEventV0[]|null $taxWithholdingEventList List of TaxWithholding events.
     *
     * @return self
     */
    public function setTaxWithholdingEventList($taxWithholdingEventList)
    {
        $this->container['taxWithholdingEventList'] = $taxWithholdingEventList;

        return $this;
    }

    /**
     * Gets removalShipmentEventList
     *
     * @return \Webcom\Amazon\Rest\FinancesApiV0\Model\RemovalShipmentEventV0[]|null
     */
    public function getRemovalShipmentEventList()
    {
        return $this->container['removalShipmentEventList'];
    }

    /**
     * Sets removalShipmentEventList
     *
     * @param \Webcom\Amazon\Rest\FinancesApiV0\Model\RemovalShipmentEventV0[]|null $removalShipmentEventList A list of removal shipment event information.
     *
     * @return self
     */
    public function setRemovalShipmentEventList($removalShipmentEventList)
    {
        $this->container['removalShipmentEventList'] = $removalShipmentEventList;

        return $this;
    }

    /**
     * Gets removalShipmentAdjustmentEventList
     *
     * @return \Webcom\Amazon\Rest\FinancesApiV0\Model\RemovalShipmentAdjustmentEventV0[]|null
     */
    public function getRemovalShipmentAdjustmentEventList()
    {
        return $this->container['removalShipmentAdjustmentEventList'];
    }

    /**
     * Sets removalShipmentAdjustmentEventList
     *
     * @param \Webcom\Amazon\Rest\FinancesApiV0\Model\RemovalShipmentAdjustmentEventV0[]|null $removalShipmentAdjustmentEventList A comma-delimited list of Removal shipmentAdjustment details for FBA inventory.
     *
     * @return self
     */
    public function setRemovalShipmentAdjustmentEventList($removalShipmentAdjustmentEventList)
    {
        $this->container['removalShipmentAdjustmentEventList'] = $removalShipmentAdjustmentEventList;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


