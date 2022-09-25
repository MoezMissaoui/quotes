# Quotes
This is a simple laravel package. It can be an exemple to learn how to create laravel package.
This package called **quotes**. If someone installs this in their Laravel project, they'll receive a random inspirational quote upon visiting the **/quote/{mode?}** route. You'll get the quotes from the [zenquotes.io/api/random](https://zenquotes.io/api/random) API.
## Installation
Execute the following command to install the package:
```
    composer require MoezMissaoui/quotes
```
## How to use
```
    {base_url}/quote/{mode?}
```
There is 3 modes:
* *quotes* : Generate a JSON array of 50 random quotes on each request.
* *today* : Generate the quote of the day on each request.
* *random* : Generate a random quote on each request.
* *by default (/quote) [mode param is not required]* : It will be random mode.
## Conclusion
I would like to thank you for trying my implementation for this simple package.
I hope you've enjoyed it and have learned some useful stuff regarding Laravel custom package development. Although in real life, packages can be much more complicated than this, the ideas should be more or less the same. If you’re stuck somewhere, feel free to reach out on [LinkedIn](https://www.linkedin.com/in/moez-missaoui-a50204141/).
## About
### Requirements
* PHP 7.* or newer
* guzzlehttp/guzzle ^7.5
### License
MIT
