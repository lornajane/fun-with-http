# Exercise 2: Working with data

## Sending data

Try sending some `GET` and `POST` requests to the `/check` endpoint. It should echo the data back to you, so take a look and make sure it understood you.

You can also send data in JSON format - make sure your client also sends the `Content-Type: application/json` header.

## Receiving data

How about receiving that data in a different format? Send `Accept: application/json` as a header and inspect the response using appropriate tools to get decoded JSON values.

## Appendix A: JSON-wrangling tools for command line

* `jq` https://stedolan.github.io/jq/
* `fx` https://github.com/antonmedv/fx
