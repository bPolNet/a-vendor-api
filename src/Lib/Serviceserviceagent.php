<?php

namespace BPolNet\A\VendorApi\Lib;

class Serviceserviceagent extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'AnyDataListType' => 'BPolNet\\A\\VendorApi\\Lib\\AnyDataListType',
      'BusinessExceptionDetailsType' => 'BPolNet\\A\\VendorApi\\Lib\\BusinessExceptionDetailsType',
      'DateTimeListType' => 'BPolNet\\A\\VendorApi\\Lib\\DateTimeListType',
      'DoubeListType' => 'BPolNet\\A\\VendorApi\\Lib\\DoubeListType',
      'ErrorReport' => 'BPolNet\\A\\VendorApi\\Lib\\ErrorReport',
      'ExceptionDetailsType' => 'BPolNet\\A\\VendorApi\\Lib\\ExceptionDetailsType',
      'FaultDetailsType' => 'BPolNet\\A\\VendorApi\\Lib\\FaultDetailsType',
      'FaultSubdetailsType' => 'BPolNet\\A\\VendorApi\\Lib\\FaultSubdetailsType',
      'IntegerListType' => 'BPolNet\\A\\VendorApi\\Lib\\IntegerListType',
      'InterfaceDetailsType' => 'BPolNet\\A\\VendorApi\\Lib\\InterfaceDetailsType',
      'MessageResultType' => 'BPolNet\\A\\VendorApi\\Lib\\MessageResultType',
      'NameValueListType' => 'BPolNet\\A\\VendorApi\\Lib\\NameValueListType',
      'NameValueType' => 'BPolNet\\A\\VendorApi\\Lib\\NameValueType',
      'StringListType' => 'BPolNet\\A\\VendorApi\\Lib\\StringListType',
      'anydata' => 'BPolNet\\A\\VendorApi\\Lib\\anydata',
      'EnterprisePayloadType' => 'BPolNet\\A\\VendorApi\\Lib\\EnterprisePayloadType',
      'MessageBodyTemplateType' => 'BPolNet\\A\\VendorApi\\Lib\\MessageBodyTemplateType',
      'MessageHeaderType' => 'BPolNet\\A\\VendorApi\\Lib\\MessageHeaderType',
      'MessageTemplateType' => 'BPolNet\\A\\VendorApi\\Lib\\MessageTemplateType',
      'ResultMessageTemplateType' => 'BPolNet\\A\\VendorApi\\Lib\\ResultMessageTemplateType',
      'ArrivalNoticeType' => 'BPolNet\\A\\VendorApi\\Lib\\ArrivalNoticeType',
      'AttributeType' => 'BPolNet\\A\\VendorApi\\Lib\\AttributeType',
      'CancelPurchaseOrderRequestBodyType' => 'BPolNet\\A\\VendorApi\\Lib\\CancelPurchaseOrderRequestBodyType',
      'CancelPurchaseOrderRequestMessageType' => 'BPolNet\\A\\VendorApi\\Lib\\CancelPurchaseOrderRequestMessageType',
      'CancelPurchaseOrderRequestPayloadType' => 'BPolNet\\A\\VendorApi\\Lib\\CancelPurchaseOrderRequestPayloadType',
      'CancelPurchaseOrderResponseBodyType' => 'BPolNet\\A\\VendorApi\\Lib\\CancelPurchaseOrderResponseBodyType',
      'CancelPurchaseOrderResponseMessageType' => 'BPolNet\\A\\VendorApi\\Lib\\CancelPurchaseOrderResponseMessageType',
      'CancelPurchaseOrderResponsePayloadType' => 'BPolNet\\A\\VendorApi\\Lib\\CancelPurchaseOrderResponsePayloadType',
      'CheckPriceListStatusRequestBodyType' => 'BPolNet\\A\\VendorApi\\Lib\\CheckPriceListStatusRequestBodyType',
      'CheckPriceListStatusRequestMessageType' => 'BPolNet\\A\\VendorApi\\Lib\\CheckPriceListStatusRequestMessageType',
      'CheckPriceListStatusRequestPayloadType' => 'BPolNet\\A\\VendorApi\\Lib\\CheckPriceListStatusRequestPayloadType',
      'CheckPriceListStatusResponseBodyType' => 'BPolNet\\A\\VendorApi\\Lib\\CheckPriceListStatusResponseBodyType',
      'CheckPriceListStatusResponseMessageType' => 'BPolNet\\A\\VendorApi\\Lib\\CheckPriceListStatusResponseMessageType',
      'CheckPriceListStatusResponsePayloadType' => 'BPolNet\\A\\VendorApi\\Lib\\CheckPriceListStatusResponsePayloadType',
      'ConfirmPurchaseOrderRequestBodyType' => 'BPolNet\\A\\VendorApi\\Lib\\ConfirmPurchaseOrderRequestBodyType',
      'ConfirmPurchaseOrderRequestMessageType' => 'BPolNet\\A\\VendorApi\\Lib\\ConfirmPurchaseOrderRequestMessageType',
      'ConfirmPurchaseOrderRequestPayloadType' => 'BPolNet\\A\\VendorApi\\Lib\\ConfirmPurchaseOrderRequestPayloadType',
      'ConfirmPurchaseOrderResponseMessageType' => 'BPolNet\\A\\VendorApi\\Lib\\ConfirmPurchaseOrderResponseMessageType',
      'ContainerContentType' => 'BPolNet\\A\\VendorApi\\Lib\\ContainerContentType',
      'ContainerType' => 'BPolNet\\A\\VendorApi\\Lib\\ContainerType',
      'CreditNoteReferenceType' => 'BPolNet\\A\\VendorApi\\Lib\\CreditNoteReferenceType',
      'GetCategoriesRequestBodyType' => 'BPolNet\\A\\VendorApi\\Lib\\GetCategoriesRequestBodyType',
      'GetCategoriesRequestMessageType' => 'BPolNet\\A\\VendorApi\\Lib\\GetCategoriesRequestMessageType',
      'GetCategoriesRequestPayloadType' => 'BPolNet\\A\\VendorApi\\Lib\\GetCategoriesRequestPayloadType',
      'GetCategoriesResponseBodyType' => 'BPolNet\\A\\VendorApi\\Lib\\GetCategoriesResponseBodyType',
      'GetCategoriesResponseMessageType' => 'BPolNet\\A\\VendorApi\\Lib\\GetCategoriesResponseMessageType',
      'GetCategoriesResponsePayloadType' => 'BPolNet\\A\\VendorApi\\Lib\\GetCategoriesResponsePayloadType',
      'GetCategoryParametersRequestBodyType' => 'BPolNet\\A\\VendorApi\\Lib\\GetCategoryParametersRequestBodyType',
      'GetCategoryParametersRequestMessageType' => 'BPolNet\\A\\VendorApi\\Lib\\GetCategoryParametersRequestMessageType',
      'GetCategoryParametersRequestPayloadType' => 'BPolNet\\A\\VendorApi\\Lib\\GetCategoryParametersRequestPayloadType',
      'GetCategoryParametersResponseBodyType' => 'BPolNet\\A\\VendorApi\\Lib\\GetCategoryParametersResponseBodyType',
      'GetCategoryParametersResponseMessageType' => 'BPolNet\\A\\VendorApi\\Lib\\GetCategoryParametersResponseMessageType',
      'GetCategoryParametersResponsePayloadType' => 'BPolNet\\A\\VendorApi\\Lib\\GetCategoryParametersResponsePayloadType',
      'GetInvoiceStatusRequestBodyType' => 'BPolNet\\A\\VendorApi\\Lib\\GetInvoiceStatusRequestBodyType',
      'GetInvoiceStatusRequestMessageType' => 'BPolNet\\A\\VendorApi\\Lib\\GetInvoiceStatusRequestMessageType',
      'GetInvoiceStatusRequestPayloadType' => 'BPolNet\\A\\VendorApi\\Lib\\GetInvoiceStatusRequestPayloadType',
      'GetInvoiceStatusResponseBodyType' => 'BPolNet\\A\\VendorApi\\Lib\\GetInvoiceStatusResponseBodyType',
      'GetInvoiceStatusResponseMessageType' => 'BPolNet\\A\\VendorApi\\Lib\\GetInvoiceStatusResponseMessageType',
      'GetInvoiceStatusResponsePayloadType' => 'BPolNet\\A\\VendorApi\\Lib\\GetInvoiceStatusResponsePayloadType',
      'GetOrderStatusDetailsRequestBodyType' => 'BPolNet\\A\\VendorApi\\Lib\\GetOrderStatusDetailsRequestBodyType',
      'GetOrderStatusDetailsRequestMessageType' => 'BPolNet\\A\\VendorApi\\Lib\\GetOrderStatusDetailsRequestMessageType',
      'GetOrderStatusDetailsRequestPayloadType' => 'BPolNet\\A\\VendorApi\\Lib\\GetOrderStatusDetailsRequestPayloadType',
      'GetOrderStatusDetailsResponseBodyType' => 'BPolNet\\A\\VendorApi\\Lib\\GetOrderStatusDetailsResponseBodyType',
      'GetOrderStatusDetailsResponseMessageType' => 'BPolNet\\A\\VendorApi\\Lib\\GetOrderStatusDetailsResponseMessageType',
      'GetOrderStatusDetailsResponsePayloadType' => 'BPolNet\\A\\VendorApi\\Lib\\GetOrderStatusDetailsResponsePayloadType',
      'GetOrderStatusRequestBodyType' => 'BPolNet\\A\\VendorApi\\Lib\\GetOrderStatusRequestBodyType',
      'RequestList' => 'BPolNet\\A\\VendorApi\\Lib\\RequestList',
      'GetOrderStatusRequestMessageType' => 'BPolNet\\A\\VendorApi\\Lib\\GetOrderStatusRequestMessageType',
      'GetOrderStatusRequestPayloadType' => 'BPolNet\\A\\VendorApi\\Lib\\GetOrderStatusRequestPayloadType',
      'GetOrderStatusResponseBodyType' => 'BPolNet\\A\\VendorApi\\Lib\\GetOrderStatusResponseBodyType',
      'GetOrderStatusResponseMessageType' => 'BPolNet\\A\\VendorApi\\Lib\\GetOrderStatusResponseMessageType',
      'GetOrderStatusResponsePayloadType' => 'BPolNet\\A\\VendorApi\\Lib\\GetOrderStatusResponsePayloadType',
      'GetPackingSlipRequestBodyType' => 'BPolNet\\A\\VendorApi\\Lib\\GetPackingSlipRequestBodyType',
      'GetPackingSlipRequestMessageType' => 'BPolNet\\A\\VendorApi\\Lib\\GetPackingSlipRequestMessageType',
      'GetPackingSlipRequestPayloadType' => 'BPolNet\\A\\VendorApi\\Lib\\GetPackingSlipRequestPayloadType',
      'GetPackingSlipResponseBodyType' => 'BPolNet\\A\\VendorApi\\Lib\\GetPackingSlipResponseBodyType',
      'GetPackingSlipResponseMessageType' => 'BPolNet\\A\\VendorApi\\Lib\\GetPackingSlipResponseMessageType',
      'GetPackingSlipResponsePayloadType' => 'BPolNet\\A\\VendorApi\\Lib\\GetPackingSlipResponsePayloadType',
      'GetPlatformCategoriesRequestBodyType' => 'BPolNet\\A\\VendorApi\\Lib\\GetPlatformCategoriesRequestBodyType',
      'GetPlatformCategoriesRequestMessageType' => 'BPolNet\\A\\VendorApi\\Lib\\GetPlatformCategoriesRequestMessageType',
      'GetPlatformCategoriesRequestPayloadType' => 'BPolNet\\A\\VendorApi\\Lib\\GetPlatformCategoriesRequestPayloadType',
      'GetPlatformCategoriesResponseBodyType' => 'BPolNet\\A\\VendorApi\\Lib\\GetPlatformCategoriesResponseBodyType',
      'GetPlatformCategoriesResponseMessageType' => 'BPolNet\\A\\VendorApi\\Lib\\GetPlatformCategoriesResponseMessageType',
      'GetPlatformCategoriesResponsePayloadType' => 'BPolNet\\A\\VendorApi\\Lib\\GetPlatformCategoriesResponsePayloadType',
      'GetPlatformCategoryParametersRequestBodyType' => 'BPolNet\\A\\VendorApi\\Lib\\GetPlatformCategoryParametersRequestBodyType',
      'GetPlatformCategoryParametersRequestMessageType' => 'BPolNet\\A\\VendorApi\\Lib\\GetPlatformCategoryParametersRequestMessageType',
      'GetPlatformCategoryParametersRequestPayloadType' => 'BPolNet\\A\\VendorApi\\Lib\\GetPlatformCategoryParametersRequestPayloadType',
      'GetPlatformCategoryParametersResponseBodyType' => 'BPolNet\\A\\VendorApi\\Lib\\GetPlatformCategoryParametersResponseBodyType',
      'GetPlatformCategoryParametersResponseMessageType' => 'BPolNet\\A\\VendorApi\\Lib\\GetPlatformCategoryParametersResponseMessageType',
      'GetPlatformCategoryParametersResponsePayloadType' => 'BPolNet\\A\\VendorApi\\Lib\\GetPlatformCategoryParametersResponsePayloadType',
      'GetPurchaseOrderRequestBodyType' => 'BPolNet\\A\\VendorApi\\Lib\\GetPurchaseOrderRequestBodyType',
      'GetPurchaseOrderRequestMessageType' => 'BPolNet\\A\\VendorApi\\Lib\\GetPurchaseOrderRequestMessageType',
      'GetPurchaseOrderRequestPayloadType' => 'BPolNet\\A\\VendorApi\\Lib\\GetPurchaseOrderRequestPayloadType',
      'GetPurchaseOrderResponseBodyType' => 'BPolNet\\A\\VendorApi\\Lib\\GetPurchaseOrderResponseBodyType',
      'GetPurchaseOrderResponseMessageType' => 'BPolNet\\A\\VendorApi\\Lib\\GetPurchaseOrderResponseMessageType',
      'GetPurchaseOrderResponsePayloadType' => 'BPolNet\\A\\VendorApi\\Lib\\GetPurchaseOrderResponsePayloadType',
      'GetSalesReportDetailsRequestBodyType' => 'BPolNet\\A\\VendorApi\\Lib\\GetSalesReportDetailsRequestBodyType',
      'GetSalesReportDetailsRequestMessageType' => 'BPolNet\\A\\VendorApi\\Lib\\GetSalesReportDetailsRequestMessageType',
      'GetSalesReportDetailsRequestPayloadType' => 'BPolNet\\A\\VendorApi\\Lib\\GetSalesReportDetailsRequestPayloadType',
      'GetSalesReportDetailsResponseBodyType' => 'BPolNet\\A\\VendorApi\\Lib\\GetSalesReportDetailsResponseBodyType',
      'GetSalesReportDetailsResponseMessageType' => 'BPolNet\\A\\VendorApi\\Lib\\GetSalesReportDetailsResponseMessageType',
      'GetSalesReportDetailsResponsePayloadType' => 'BPolNet\\A\\VendorApi\\Lib\\GetSalesReportDetailsResponsePayloadType',
      'ImageType' => 'BPolNet\\A\\VendorApi\\Lib\\ImageType',
      'InvoiceListType' => 'BPolNet\\A\\VendorApi\\Lib\\InvoiceListType',
      'InvoiceStatus' => 'BPolNet\\A\\VendorApi\\Lib\\InvoiceStatus',
      'InvoiceType' => 'BPolNet\\A\\VendorApi\\Lib\\InvoiceType',
      'ItemLineType' => 'BPolNet\\A\\VendorApi\\Lib\\ItemLineType',
      'ItemLinesType' => 'BPolNet\\A\\VendorApi\\Lib\\ItemLinesType',
      'LineAttributeType' => 'BPolNet\\A\\VendorApi\\Lib\\LineAttributeType',
      'OptionsType' => 'BPolNet\\A\\VendorApi\\Lib\\OptionsType',
      'OrderLineGroupType' => 'BPolNet\\A\\VendorApi\\Lib\\OrderLineGroupType',
      'OrderLineListGroupType' => 'BPolNet\\A\\VendorApi\\Lib\\OrderLineListGroupType',
      'OrderLineType' => 'BPolNet\\A\\VendorApi\\Lib\\OrderLineType',
      'OrderReferenceType' => 'BPolNet\\A\\VendorApi\\Lib\\OrderReferenceType',
      'OrderStatusListType' => 'BPolNet\\A\\VendorApi\\Lib\\OrderStatusListType',
      'OrderStatusType' => 'BPolNet\\A\\VendorApi\\Lib\\OrderStatusType',
      'PackageType' => 'BPolNet\\A\\VendorApi\\Lib\\PackageType',
      'PackingSlipLineType' => 'BPolNet\\A\\VendorApi\\Lib\\PackingSlipLineType',
      'PackingSlipType' => 'BPolNet\\A\\VendorApi\\Lib\\PackingSlipType',
      'ParameterType' => 'BPolNet\\A\\VendorApi\\Lib\\ParameterType',
      'ProductCategoryListType' => 'BPolNet\\A\\VendorApi\\Lib\\ProductCategoryListType',
      'ProductCategoryParameterType' => 'BPolNet\\A\\VendorApi\\Lib\\ProductCategoryParameterType',
      'Group' => 'BPolNet\\A\\VendorApi\\Lib\\Group',
      'Dictionary' => 'BPolNet\\A\\VendorApi\\Lib\\Dictionary',
      'Value' => 'BPolNet\\A\\VendorApi\\Lib\\Value',
      'ValueRestrictions' => 'BPolNet\\A\\VendorApi\\Lib\\ValueRestrictions',
      'Options' => 'BPolNet\\A\\VendorApi\\Lib\\Options',
      'ProductCategoryParametersType' => 'BPolNet\\A\\VendorApi\\Lib\\ProductCategoryParametersType',
      'Parameters' => 'BPolNet\\A\\VendorApi\\Lib\\Parameters',
      'ProductCategoryType' => 'BPolNet\\A\\VendorApi\\Lib\\ProductCategoryType',
      'ProductType' => 'BPolNet\\A\\VendorApi\\Lib\\ProductType',
      'PurchaseInquiryLineGroupType' => 'BPolNet\\A\\VendorApi\\Lib\\PurchaseInquiryLineGroupType',
      'PurchaseInvoiceLineType' => 'BPolNet\\A\\VendorApi\\Lib\\PurchaseInvoiceLineType',
      'PurchaseInvoiceType' => 'BPolNet\\A\\VendorApi\\Lib\\PurchaseInvoiceType',
      'PurchaseOrderLineType' => 'BPolNet\\A\\VendorApi\\Lib\\PurchaseOrderLineType',
      'PurchaseOrderType' => 'BPolNet\\A\\VendorApi\\Lib\\PurchaseOrderType',
      'ReceiptsListGroupType' => 'BPolNet\\A\\VendorApi\\Lib\\ReceiptsListGroupType',
      'ReceiptsListType' => 'BPolNet\\A\\VendorApi\\Lib\\ReceiptsListType',
      'SalesReportType' => 'BPolNet\\A\\VendorApi\\Lib\\SalesReportType',
      'ShipmentContainerType' => 'BPolNet\\A\\VendorApi\\Lib\\ShipmentContainerType',
      'ShipmentContentType' => 'BPolNet\\A\\VendorApi\\Lib\\ShipmentContentType',
      'SubmitArrivalNoticeRequestBodyType' => 'BPolNet\\A\\VendorApi\\Lib\\SubmitArrivalNoticeRequestBodyType',
      'SubmitArrivalNoticeRequestMessageType' => 'BPolNet\\A\\VendorApi\\Lib\\SubmitArrivalNoticeRequestMessageType',
      'SubmitArrivalNoticeRequestPayloadType' => 'BPolNet\\A\\VendorApi\\Lib\\SubmitArrivalNoticeRequestPayloadType',
      'SubmitArrivalNoticeResponseBodyType' => 'BPolNet\\A\\VendorApi\\Lib\\SubmitArrivalNoticeResponseBodyType',
      'SubmitArrivalNoticeResponseMessageType' => 'BPolNet\\A\\VendorApi\\Lib\\SubmitArrivalNoticeResponseMessageType',
      'SubmitArrivalNoticeResponsePayloadType' => 'BPolNet\\A\\VendorApi\\Lib\\SubmitArrivalNoticeResponsePayloadType',
      'SubmitInvoiceRequestBodyType' => 'BPolNet\\A\\VendorApi\\Lib\\SubmitInvoiceRequestBodyType',
      'SubmitInvoiceRequestMessageType' => 'BPolNet\\A\\VendorApi\\Lib\\SubmitInvoiceRequestMessageType',
      'SubmitInvoiceRequestPayloadType' => 'BPolNet\\A\\VendorApi\\Lib\\SubmitInvoiceRequestPayloadType',
      'SubmitInvoiceResponseMessageType' => 'BPolNet\\A\\VendorApi\\Lib\\SubmitInvoiceResponseMessageType',
      'SubmitPriceListAsyncRequestBodyType' => 'BPolNet\\A\\VendorApi\\Lib\\SubmitPriceListAsyncRequestBodyType',
      'ProductPrice' => 'BPolNet\\A\\VendorApi\\Lib\\ProductPrice',
      'SubmitPriceListAsyncRequestMessageType' => 'BPolNet\\A\\VendorApi\\Lib\\SubmitPriceListAsyncRequestMessageType',
      'SubmitPriceListAsyncRequestPayloadType' => 'BPolNet\\A\\VendorApi\\Lib\\SubmitPriceListAsyncRequestPayloadType',
      'SubmitPriceListAsyncResponseBodyType' => 'BPolNet\\A\\VendorApi\\Lib\\SubmitPriceListAsyncResponseBodyType',
      'SubmitPriceListAsyncResponseMessageType' => 'BPolNet\\A\\VendorApi\\Lib\\SubmitPriceListAsyncResponseMessageType',
      'SubmitPriceListAsyncResponsePayloadType' => 'BPolNet\\A\\VendorApi\\Lib\\SubmitPriceListAsyncResponsePayloadType',
      'SubmitPriceListRequestBodyType' => 'BPolNet\\A\\VendorApi\\Lib\\SubmitPriceListRequestBodyType',
      'SubmitPriceListRequestMessageType' => 'BPolNet\\A\\VendorApi\\Lib\\SubmitPriceListRequestMessageType',
      'SubmitPriceListRequestPayloadType' => 'BPolNet\\A\\VendorApi\\Lib\\SubmitPriceListRequestPayloadType',
      'SubmitPriceListResponseMessageType' => 'BPolNet\\A\\VendorApi\\Lib\\SubmitPriceListResponseMessageType',
      'SubmitProductInfoRequestBodyType' => 'BPolNet\\A\\VendorApi\\Lib\\SubmitProductInfoRequestBodyType',
      'SubmitProductInfoRequestMessageType' => 'BPolNet\\A\\VendorApi\\Lib\\SubmitProductInfoRequestMessageType',
      'SubmitProductInfoRequestPayloadType' => 'BPolNet\\A\\VendorApi\\Lib\\SubmitProductInfoRequestPayloadType',
      'SubmitProductInfoResponseMessageType' => 'BPolNet\\A\\VendorApi\\Lib\\SubmitProductInfoResponseMessageType',
      'SubmitShipmentStatusRequestBodyType' => 'BPolNet\\A\\VendorApi\\Lib\\SubmitShipmentStatusRequestBodyType',
      'ShipmentStatus' => 'BPolNet\\A\\VendorApi\\Lib\\ShipmentStatus',
      'SubmitShipmentStatusRequestMessageType' => 'BPolNet\\A\\VendorApi\\Lib\\SubmitShipmentStatusRequestMessageType',
      'SubmitShipmentStatusRequestPayloadType' => 'BPolNet\\A\\VendorApi\\Lib\\SubmitShipmentStatusRequestPayloadType',
      'SubmitShipmentStatusResponseMessageType' => 'BPolNet\\A\\VendorApi\\Lib\\SubmitShipmentStatusResponseMessageType',
      'SubmitStockRequestBodyType' => 'BPolNet\\A\\VendorApi\\Lib\\SubmitStockRequestBodyType',
      'ProductStock' => 'BPolNet\\A\\VendorApi\\Lib\\ProductStock',
      'SubmitStockRequestMessageType' => 'BPolNet\\A\\VendorApi\\Lib\\SubmitStockRequestMessageType',
      'SubmitStockRequestPayloadType' => 'BPolNet\\A\\VendorApi\\Lib\\SubmitStockRequestPayloadType',
      'SubmitStockResponseMessageType' => 'BPolNet\\A\\VendorApi\\Lib\\SubmitStockResponseMessageType',
      'TrackingEventType' => 'BPolNet\\A\\VendorApi\\Lib\\TrackingEventType',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(), $wsdl = null)
    {
      foreach (self::$classmap as $key => $value) {
        if (!isset($options['classmap'][$key])) {
          $options['classmap'][$key] = $value;
        }
      }
      $options = array_merge(array (
      'features' => 1,
    ), $options);
      if (!$wsdl) {
        throw new \Exception('Missing WSDL !!!');
      }
      parent::__construct($wsdl, $options);
    }

    /**
     * @param GetOrderStatusDetailsRequestMessageType $GetOrderStatusDetailsRequestMessage
     * @return GetOrderStatusDetailsResponseMessageType
     */
    public function GetOrderStatusDetails(GetOrderStatusDetailsRequestMessageType $GetOrderStatusDetailsRequestMessage)
    {
      return $this->__soapCall('GetOrderStatusDetails', array($GetOrderStatusDetailsRequestMessage));
    }

    /**
     * @param CheckPriceListStatusRequestMessageType $CheckPriceListStatusRequestMessage
     * @return CheckPriceListStatusResponseMessageType
     */
    public function CheckPriceListStatus(CheckPriceListStatusRequestMessageType $CheckPriceListStatusRequestMessage)
    {
      return $this->__soapCall('CheckPriceListStatus', array($CheckPriceListStatusRequestMessage));
    }

    /**
     * @param SubmitPriceListAsyncRequestMessageType $SubmitPriceListAsyncRequestMessage
     * @return SubmitPriceListAsyncResponseMessageType
     */
    public function SubmitPriceListAsync(SubmitPriceListAsyncRequestMessageType $SubmitPriceListAsyncRequestMessage)
    {
      return $this->__soapCall('SubmitPriceListAsync', array($SubmitPriceListAsyncRequestMessage));
    }

    /**
     * @param GetCategoryParametersRequestMessageType $GetCategoryParametersRequestMessage
     * @return GetCategoryParametersResponseMessageType
     */
    public function GetCategoryParameters(GetCategoryParametersRequestMessageType $GetCategoryParametersRequestMessage)
    {
      return $this->__soapCall('GetCategoryParameters', array($GetCategoryParametersRequestMessage));
    }

    /**
     * @param SubmitProductInfoRequestMessageType $SubmitProductInfoRequestMessage
     * @return SubmitProductInfoResponseMessageType
     */
    public function SubmitProductInfo(SubmitProductInfoRequestMessageType $SubmitProductInfoRequestMessage)
    {
      return $this->__soapCall('SubmitProductInfo', array($SubmitProductInfoRequestMessage));
    }

    /**
     * @param CancelPurchaseOrderRequestMessageType $CancelPurchaseOrderRequestMessage
     * @return CancelPurchaseOrderResponseMessageType
     */
    public function CancelPurchaseOrder(CancelPurchaseOrderRequestMessageType $CancelPurchaseOrderRequestMessage)
    {
      return $this->__soapCall('CancelPurchaseOrder', array($CancelPurchaseOrderRequestMessage));
    }

    /**
     * @param ConfirmPurchaseOrderRequestMessageType $ConfirmPurchaseOrderRequestMessage
     * @return ConfirmPurchaseOrderResponseMessageType
     */
    public function ConfirmPurchaseOrder(ConfirmPurchaseOrderRequestMessageType $ConfirmPurchaseOrderRequestMessage)
    {
      return $this->__soapCall('ConfirmPurchaseOrder', array($ConfirmPurchaseOrderRequestMessage));
    }

    /**
     * @param GetPlatformCategoriesRequestMessageType $GetPlatformCategoriesRequestMessage
     * @return GetPlatformCategoriesResponseMessageType
     */
    public function GetPlatformCategories(GetPlatformCategoriesRequestMessageType $GetPlatformCategoriesRequestMessage)
    {
      return $this->__soapCall('GetPlatformCategories', array($GetPlatformCategoriesRequestMessage));
    }

    /**
     * @param GetOrderStatusRequestMessageType $GetOrderStatusRequestMessage
     * @return GetOrderStatusResponseMessageType
     */
    public function GetOrderStatus(GetOrderStatusRequestMessageType $GetOrderStatusRequestMessage)
    {
      return $this->__soapCall('GetOrderStatus', array($GetOrderStatusRequestMessage));
    }

    /**
     * @param GetInvoiceStatusRequestMessageType $GetInvoiceStatusRequestMessage
     * @return GetInvoiceStatusResponseMessageType
     */
    public function GetInvoiceStatus(GetInvoiceStatusRequestMessageType $GetInvoiceStatusRequestMessage)
    {
      return $this->__soapCall('GetInvoiceStatus', array($GetInvoiceStatusRequestMessage));
    }

    /**
     * @param GetPurchaseOrderRequestMessageType $GetPurchaseOrderRequestMessage
     * @return GetPurchaseOrderResponseMessageType
     */
    public function GetPurchaseOrder(GetPurchaseOrderRequestMessageType $GetPurchaseOrderRequestMessage)
    {
      return $this->__soapCall('GetPurchaseOrder', array($GetPurchaseOrderRequestMessage));
    }

    /**
     * @param SubmitStockRequestMessageType $SubmitStockRequestMessage
     * @return SubmitStockResponseMessageType
     */
    public function SubmitStock(SubmitStockRequestMessageType $SubmitStockRequestMessage)
    {
      return $this->__soapCall('SubmitStock', array($SubmitStockRequestMessage));
    }

    /**
     * @param SubmitInvoiceRequestMessageType $SubmitInvoiceRequestMessage
     * @return SubmitInvoiceResponseMessageType
     */
    public function SubmitInvoice(SubmitInvoiceRequestMessageType $SubmitInvoiceRequestMessage)
    {
      return $this->__soapCall('SubmitInvoice', array($SubmitInvoiceRequestMessage));
    }

    /**
     * @param SubmitPriceListRequestMessageType $SubmitPriceListRequestMessage
     * @return SubmitPriceListResponseMessageType
     */
    public function SubmitPriceList(SubmitPriceListRequestMessageType $SubmitPriceListRequestMessage)
    {
      return $this->__soapCall('SubmitPriceList', array($SubmitPriceListRequestMessage));
    }

    /**
     * @param SubmitArrivalNoticeRequestMessageType $SubmitArrivalNoticeRequestMessage
     * @return SubmitArrivalNoticeResponseMessageType
     */
    public function SubmitArrivalNotice(SubmitArrivalNoticeRequestMessageType $SubmitArrivalNoticeRequestMessage)
    {
      return $this->__soapCall('SubmitArrivalNotice', array($SubmitArrivalNoticeRequestMessage));
    }

    /**
     * @param GetCategoriesRequestMessageType $GetCategoriesRequestMessage
     * @return GetCategoriesResponseMessageType
     */
    public function GetCategories(GetCategoriesRequestMessageType $GetCategoriesRequestMessage)
    {
      return $this->__soapCall('GetCategories', array($GetCategoriesRequestMessage));
    }

    /**
     * @param GetPackingSlipRequestMessageType $GetPackingSlipRequestMessage
     * @return GetPackingSlipResponseMessageType
     */
    public function GetPackingSlip(GetPackingSlipRequestMessageType $GetPackingSlipRequestMessage)
    {
      return $this->__soapCall('GetPackingSlip', array($GetPackingSlipRequestMessage));
    }

    /**
     * @param SubmitShipmentStatusRequestMessageType $SubmitShipmentStatusRequestMessage
     * @return SubmitShipmentStatusResponseMessageType
     */
    public function SubmitShipmentStatus(SubmitShipmentStatusRequestMessageType $SubmitShipmentStatusRequestMessage)
    {
      return $this->__soapCall('SubmitShipmentStatus', array($SubmitShipmentStatusRequestMessage));
    }

    /**
     * @param GetPlatformCategoryParametersRequestMessageType $GetPlatformCategoryParametersRequestMessage
     * @return GetPlatformCategoryParametersResponseMessageType
     */
    public function GetPlatformCategoryParameters(GetPlatformCategoryParametersRequestMessageType $GetPlatformCategoryParametersRequestMessage)
    {
      return $this->__soapCall('GetPlatformCategoryParameters', array($GetPlatformCategoryParametersRequestMessage));
    }

    /**
     * @param GetSalesReportDetailsRequestMessageType $GetSalesReportDetailsRequestMessage
     * @return GetSalesReportDetailsResponseMessageType
     */
    public function GetSalesReportDetails(GetSalesReportDetailsRequestMessageType $GetSalesReportDetailsRequestMessage)
    {
      return $this->__soapCall('GetSalesReportDetails', array($GetSalesReportDetailsRequestMessage));
    }

}
