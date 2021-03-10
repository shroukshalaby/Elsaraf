###  Retrieve Order
    At this step, you will get retrieve order information

Method     |URI      |Headers
------- | ------- | -------
POST  |  `https://accept.elsaraf.com/api/retrieveOrder/{orderId}` | default

----

> {info.fa-stop}
> Please note that the URI for this endpoint `https://accept.elsaraf.com/api/retrieveOrder/{orderId}`


###  request data:
        
```javascript  
    {
        "api_token": "15n1b1f9z3f64b86b2f0a703838en32n"
    }

```
###  response data:
        
```javascript  
    {
        "data": {
        "id": "WmRZq24vBm5Bgr3MD1L8",
        "amount": 965,
        "totalAuthorizedAmount": 0,
        "totalCapturedAmount": 0,
        "totalRefundedAmount": 0,
        "status": "INITIATED",
        "currency": "EGP",
        "transactions_count": 0,
        "created_at": "2021-02-10T15:10:21.000000Z",
        "updated_at": "2021-02-10T15:10:21.000000Z",
        "invoice": {
        "tax": 50,
        "items": [
        {
        "name": "product1",
        "price": "300.00",
        "total": "300.00",
        "itemId": 1222,
        "quantity": 1,
        "description": "."
        },
        {
        "name": "product2",
        "price": "300.00",
        "total": "600.00",
        "itemId": 12222,
        "quantity": 2,
        "description": "hey."
        }
        ],
        "total": "965.00",
        "shipping": 15,
        "subtotal": "900.00"
        }
        }
    }

```
Status     | Description
------------- | ------------
AUTHENTICATED               | The payer was successfully authenticated.
AUTHENTICATION_INITIATED    | Payer authentication has been initiated but not completed.
AUTHENTICATION_NOT_NEEDED   | Payer authentication was not performed as it was not needed.
AUTHENTICATION_UNSUCCESSFUL | Payer authentication was not able to be successfully completed.
AUTHORIZED                  | The payment has been authorized successfully but the authorized amount has not yet been captured, in part, full, or excess.
CANCELLED                   | The initial transaction for this order has been voided successfully.
CAPTURED                    | The authorized amount for this order, in full or excess, has been captured successfully.
CHARGEBACK_PROCESSED        | A Chargeback has been processed against this order.
DISPUTED                    | The payment has been disputed and is under investigation. A request for information has been received or a chargeback is pending.
EXCESSIVELY_REFUNDED        | The payment has been captured in part, full, or excess, but the captured amount in excess has been refunded successfully.
FAILED                      | The payment has not been successful.
FUNDING                     | The order transfers money to or from the merchant, without the involvement of a payer. For example, recording monthly merchant service fees from the payment service provider.
INITIATED                   | A browser payment that has successfully been initiated for this order. No payment has yet been made.
PARTIALLY_CAPTURED          | The authorized amount for this order, in part, has been captured successfully.
PARTIALLY_REFUNDED          | The payment has been captured in part, full, or excess, but the captured amount in part has been refunded successfully.
REFUNDED                    | The payment has been captured in part, full, or excess, but the captured amount in full has been refunded successfully.
REFUND_REQUESTED            | A refund against captured amounts on this order has been requested but not executed. Requires further action to approve the refund.
VERIFIED                    | The card details for this order have successfully been verified. No payment has yet been initiated or made.
----


