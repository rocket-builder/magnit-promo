# magnit-promo
 server side for project with promo codes in magnit shops.
 base url: https://magnit-server.000webhostapp.com/

* All queries send throught POST method.
* *The result is also an object*, its content is in the content field
#### result object
* fields: message(string), isError(boolean), content(array)

## authorization
### login
* adress: /php/controllers/login-controller.php
* arguments: login(string), password(string)
* result: user(object)

### sign in
* adress: /php/controllers/signin-controller.php
* arguments: login(string), password(string), region(string)
* result: user(object)

## regions
### get regions
* adress: /php/controllers/region-get-controller.php
* arguments: none
* result: regions(object array)
### add regions
* adress: /php/controllers/region-add-controller.php
* arguments: region(string)
* result: inserted region id(int)
### delete regions
* adress: /php/controllers/region-delete-controller.php
* arguments: region(string)
* result: successful message from response object

## ranges
### get all ranges
* adress: /php/controllers/range-get-controller.php
* arguments: none
* result: ranges(object array)
### delete range
* adress: /php/controllers/range-delete-controller.php
* arguments: range(int, only 12 numbers length)
* result: successful message from response object
## cards
### get cards from single range
* adress: /php/controllers/card-get-controller.php
* arguments: range(int, only 12 numbers length)
* result: cards(array)
### generate cards from range
this method can only be called after login
* adress: /php/controllers/card-add-controller.php
* arguments: range(int, only 12 numbers length)
* result: cards(int array), region(object)

## QR codes
### get qr code
field id is a card id
* adress: /php/controllers/qr-controller.php
* arguments: id(int)
* result: url(string), card(object)

## promo codes
### add working promo code for telegram bot
* adress: /php/controllers/promo-add-controller.php
* arguments: card_id(int), balance(decimal)
* result: successful message from response object

## orders
### get all orders in desc order
* adress: /php/controllers/orders-get-controller.php
* arguments: none
* result: orders(object array)

## administration
when registering the first user, it is automatically assigned the role of super admin, which has the right to assign and remove other administrators
*only super admin can use this methods*
### add new admin
* adress: /php/controllers/admin-add-controller.php
* arguments: login(string), password(string), region_id(int)
* result: successful message from response object
### delete admin
* adress: /php/controllers/admin-delete-controller.php
* arguments: id(int)
* result: successful message from response object
### get all admins
* adress: /php/controllers/admin-get-controller.php
* arguments: none
* result: admins(object array)

## QIWI integration
 methods for manage qiwi wallets
 *for recive payments from customers use only last added wallet*
 token(string) - public qiwi wallet key
 secret(string) - secret qiwi wallet key
### get last wallet
* adress: /php/controllers/qiwi-get-controller.php
* arguments: none
* result: qiwi(object)
### set new current wallet
* adress: /php/controllers/qiwi-add-controller.php
* arguments: number(int), token(string), secret(string)
* result: qiwi(object)
