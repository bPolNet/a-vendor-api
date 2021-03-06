# A Vendor API library

## API methods

### Model Dropship (DRS)

| API Method            | Lib method                                                                    | Implemented |
|:----------------------|:------------------------------------------------------------------------------|:------------|
| GetCategories         | getCategories()                                                               | X           |
| GetCategoryParameters | getCategoryParameters(string $id)                                             | X           |
| SubmitProductInfo     |                                                                               |             |
| SubmitPriceListAsync  | submitPriceList(array $productPrice,?DateTime $startDate, ?DateTime $endDate) | X           |
| SubmitStock           | submitStock(array $productStock)                                              | X           |
| GetPurchaseOrder      | getPurchaseOrder()                                                            | X           |
| CancelPurchaseOrder   | cancelPurchaseOrder(string $id)                                               | X           |
| ConfirmPurchaseOrder  | confirmPurchaseOrder(string $id, DateTime $deliveryDate)                      | X           |
| GetOrderStatus        | getOrderStatus(string $id)                                                    | X           |
| GetOrderStatusDetails | getOrderStatusDetails(string $id)                                             | X           |
| SubmitShipmentStatus  | submitShipmentStatus(array $shipmentStatus)                                   | X           |
| GetPackingSlip        | getPackingSlip()                                                              | X           |
| SubmitInvoice         | submitInvoice(PurchaseInvoiceType $invoice)                                   | X           |
| GetInvoiceStatus      | getInvoiceStatus(array $id)                                                   | X           |

### Certificate
* check official `SSL+Certificates.pdf` docs
* convert received certificate to PFK format
* convert PFK to PEM
  ```
    openssl pkcs12 -in cert.pfx -out cert_key.pem -clcerts
  ```
* use this certificate with library

### API Errors
* when request params are not proper or there is a technical problem on vendor side API returns ambiguous error.  
To find out the reason vendor needs to be contacted.

    ```
    #OriginatorURI: "Not Authenticated"
    #ResultCode: "TECH-001"
    #ResultMessage: "Technical error occured while processing request"
    ```

### Tests
* to run Integration tests full credentials to A Vendor API required
