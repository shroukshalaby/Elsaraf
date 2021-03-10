
###  Easy Integration

    Receiving money on your website is now easy with simple integeration at a fee 
    of 10% per transaction and this document will introduce you to all the basic
    information you need to better understand our technologies to start receiving 
    payment on your website, or you need to do is copy the html form code below to
    your website page.

  ```javascript  

    <form method="POST" action="https://elsaraf.com/ext_transfer" >
        <input type="hidden" name="merchant_key" value="MERCHANT KEY" />
        <input type="hidden" name="public_key" value="PUBLIC KEY" />
        <input type="hidden" name="callback_url" value="mydomain.com/success.html" />
        <input type="hidden" name="tx_ref" value="REF_123456" />
        <input type="hidden" name="amount" value="10000" />
        <input type="hidden" name="email" value="user@test.com" />
        <input type="hidden" name="first_name" value="Finn" />
        <input type="hidden" name="last_name" value="Marshal" />
        <input type="hidden" name="title" value="Payment For Item" />
        <input type="hidden" name="description" value="Payment For Item" />
        <input type="hidden" name="quantity" value="10" />
        <input type="hidden" name="currency" value="EGP" />
        <input type="hidden" value="submit" />
    </form>

  ```
### Verifying payment

    Depending on your callback url is not fully secure, ensure you verify payment 
    with our api before going further.

 ```javascript 
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_URL, 'https://elsaraf.com/api/verify-payment/{txref}/{secretkey}');
        $result = curl_exec($ch);
        curl_close($ch);
        $obj=json_decode($result, true);
        //Verify Payment
        if (array_key_exists("data", $obj)  && ($obj["status"] == "success")) {
            echo 'success';
        }
  ```
### Successful Json Callback

 ```javascript 

    {
        "message":null,
        "status":"success",
        "data":{
            "id":6,
            "email":"a@b.com",
            "first_name":"qwert",
            "last_name":"trewq",
            "payment_type":account,
            "title":Rubik Cube,
            "description":Payment for Rubik Cube,
            "quantity":2,
            "reference":"Di9Wr1LuC7u4WEGu",
            "amount":10000,
            "charge":50,
            "merchant_key":"r1Kn6nzk1cE63rQE",
            "callback_url":"mydomain.com\/thank_you.html",
            "tx_ref":"deff",
            "status":"paid",
            "created_at":"2021-01-01T22:05:02.000000Z",
            "updated_at":"2020-05-15T12:05:29.000000Z"
        }
    }
  ```

Parameter     |Required      |Description
------------- | ------------- | ------------
merchant_key  | Yes | Used to authorize a transaction
callback_url  | Yes | This is a callback endpoint you provide
tx_ref        | Yes | This is the merchant reference tied to a transaction
amount        | Yes | Cost of Item Purchased
email         | Yes | Email of Client making payment
first_name    | Yes | First name of Client making payment
last_name     | Yes | Last name of Client making payment
title         | Yes | Title of transaction
description   | Yes | Description of what transaction is for
currency      | Yes | This is the currency , it should come in EGP
quantity      | Yes | Quantity of Item being payed for
----
