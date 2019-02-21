# Exercise 3: Calling another API

From our PHP application, we get data from another API (in this case https://api.joind.in).

## Testing API calls

Set up a local RequestBin and send some requests to it from your HTTP client.

## Request external data

There is an incomplete endpoint in `index.php` called `/talks`. Work out how to make the correct request to the API to get all the talks for this event in JSON format. As you work on this task, remember that you can change the destination URL to point to the RequestBin and inspect that you are sending the request you expected.

## Appendix A: Resources

My fork of Requestbin has some patches that should allow it to run on Heroku. https://github.com/lornajane/requestbin

Joind.in API docs: http://docs.joind.in/joindin-api/ , you don't need to authenticate to retrieve this public data. Note that the API also has an HTML output handler so you can click around in your browser to explore.
