###  Order Registration API
      At this step, you should send those parameters to create an order

 
Method     |URI      |Headers
------- | ------- | -------
POST  |  `https://accept.elsaraf.com/api/init` | default

----

> {info.fa-stop} 
> Please note that the URI for this endpoint `https://accept.elsaraf.com/api/init`

###  request data:
  ```javascript  
        {
        "api_token": "15n1b1f9z3f64b86b2f0a703838en32n",
        "customer": {
        "customerName": "user",
        "customerMobile": "01123456789",
        "customerEmail": "user@user.com"
        },
        "interaction": {
        "cancelUrl": "http://cancelUrl.com",
        "returnUrl": "http://returnUrl.com",
        "timeoutUrl": "http://timeoutUrl.com"
        },
        "invoice": {
        "items": [
        {
        "itemId": 1222,
        "name": "product1",
        "description": ".",
        "quantity": 1,
        "price": 300
        },
        {
        "itemId": 12222,
        "name": "product2",
        "description": "hey.",
        "quantity": 2,
        "price": 300
        }
        ],
        "shipping":15,
        "tax":50
        },
        "currency": "EGP",
        "currencySymbol": "EGP",
        "locale": "ar"
        }
    ```

Parameter     |Required      |Description
------------- | ------------- | ------------
customerName  | Yes | your customer name
customerMobile| No  | your customer mobile number , max length(11)
customerEmail | Yes | your customer email
cancelUrl     | Yes | if the user cancels the payment it will be redirected to cancel url 
returnUrl     | Yes | if the payment success it will be redirected to return url 
timeoutUrl    | Yes | if the session is time out or there is a problem with the internet it will be redirected to time out url 
itemId        | Yes | the id of the item
name          | Yes | the name of the item
description   | Yes | the description of the item
quantity      | Yes | the quantity of the item
price         | Yes | the price of the item
shipping      | Yes | shipping cost 
tax           | Yes | taxs cost
currency      | Yes | currency code `ex('EGY' , 'USD' , ....)`
currencySymbol| Yes | currency symbol `ex('EGY', '$' , ...)`
locale        | Yes | language of the invoice and we support 2 languages `(Arabic and English)`

----

###  response data:
  ```javascript  

{
"url": "http://backend.test/api/accept/dMxL16K2zLoalZ9VW38o",
"token": "eyJpdiI6IjRRNk1URFFHdE9jL25MOUFiOGdDVUE9PSIsInZhbHVlIjoibVFlSlQrWVdna09SYXdFL1JhZmJOcnA4cVJ0d09udWY0VDdpWnovM0FOc2FWTUlJakZpeVVXYUFOVU1jQW1waldNYVQwMTBYd2l3V2ZrVVp3Tm15VFQrWElBbHVxUHpjTEZnTFI0d0J4aVI5ckZDcEVXc2tCVjhaQjdwekRrZ2lMeXByUnVFMjI5cHVhZEEyODgyS0RmWFpxMXM2TUtOaUNtVWhkNFlGNkZWYUFYbFllUS9xUFB6WjFUQm5zNVhDS05MeXRlQVpROWdTL3h1RXZFV0lnd2pkV0J1VUVoeHoxalYwWHlBd3ZoZ1d2YkhIVmZudFMyeUtKTGFsY0lFWGtBUHhHYTgvL3lxYzk4VGI5Rkl0UVQrWHNwMmtpWWxJY1c0UHQrV0NqQjJxOTc3dmpSZmNwbkQrSHpIRE5Hc1dQcWRsbUpSOE11REFZcnVwZmVGZW1vREdlTkRpWmkyQ0V3a3h5ZFJseSs1UU95ZmtQSWtGNS9NYUI2QWpxd2RiMk96d3pFbUM5UlRVUG1YK1p0YUZ3NWhNWWozTjV3emRkeXdXb3F1cTU3QkUrcjJTYVVSWEZIRi9XYnl5YUw3clJDY0dON01qaEVOTlVxeW1RQnluOEducUhNbjhhSVM3alJ0cGJUeklYNlp1cEFQcno0Q0NreG5Ibjhra2lqelpyNzArVUs2UGRRcWdsQTFXbTllNzkvZEZFempvSlVoV2tRY3dYdzIvUUhOSll0bjIvQnNRbUtiMkRwQ3BpdzdNQUZXakhwWjRYbitodXpGWHJ6Z2NkeW1oWmNhMUt0VUYvc2ZWL2F3YzBBRGJWVzI3Ukp4MTZqR2hJcks2RzZZcnJ3aTljNXFxUTg3ZElmVFVyQVovNlFGTHJuU09PYnNIbzh0T2JDcVRyQkN3cmpqNExxem5PL2VMQlpYR0VneGVydFZXTWtDVWFlYmVtb2ppTGpGczEveHJvclFWVGdoZDJPdmtlNUFFSllLbzk3QTIvOFRmM0FNc2JOZXlaSmkzbXpTMWNzRlNRSmt4NTlpSDNsU0xEUzg2WDlONnZLWFJOWVRZem1pZVFuUStuM2VRZC8rMVJERHJ3SG05WHVXb0M1cXZFa0d0ZFVJcC9DSHVTamxOMjRYR3pCUGdlYWhFZ2hXS1pDeEZnUlRoZmpNVFo2VWZZakVER0VCS05HVFJGRHpnZ0hxeHhreGdZOU9xdDkzMXVNOVNYNUxaRVlGL01MaUx4QkR2cWM4SzFRNjBHS1FlYlBjS3FES0x3MzBNcm9ucWs1VGZBQVdQYlJOTGVsdXBCaFU2K3hiZHovYkZ3RVlPNlZOc1kvV3dRZ0NHQUE4dmhXVFVOMWlGZ1Znbk1teC8vdUxDRmpXUGxBN3dkTE1RRXZPVnMzNWNRazJFUWJuNXI3bjhHNjM5L05Yckorek4ydlV5VHRXd0hUcENWd2R4SmZxa2F1YzRWLzl0YU1RRHNRPT0iLCJtYWMiOiIwY2Y4YWMwMTdiZmM4YjE1OTI5ZjY4ZTZhNGVhYWZkYjNjOTU0MjkwM2U5Njc1MzIyMWVlNGZlMjMyZjAxMzRhIn0=",
"orderId": "dMxL16K2zLoalZ9VW38o"
}

 ```
