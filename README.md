# magnit-promo
 server side for project with promo codes in magnit shops

all queries send throught post method.
the result is also an object, its content is in the content field

## login
* adress: /php/controllers/login-controller.php
* arguments: login(string), password(string)
* result: user(object)

## sign in
* adress: /php/controllers/signin-controller.php
* arguments: login(string), password(string), region(string)
* result: user(object)

## get regions
* adress: /php/controllers/region-get-controller.php
* arguments: none
* result: regions(object array)

## generate cards
this method can only be called after login
* adress: /php/controllers/card-add-controller.php
* arguments: range(int, only 12 numbers length)
* result: cards(object array)

## get qr code
field id is a card id,
* adress: /php/controllers/qr-controller.php
* arguments: id(int)
* result: url(string)

