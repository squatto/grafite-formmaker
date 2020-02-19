# FormMaker

> IMPORTANT: this fork's entire purpose is to enable compatibility with Laravel 6.x and beyond.  
> **OUTSIDE OF ENSURING COMPATIBILITY, NO FEATURE ADDITIONS/CHANGES OR BUG FIXES WILL BE MADE!**

**FormMaker** - A remarkably magical form and input maker tool for Laravel.

[![license](https://img.shields.io/github/license/mashape/apistatus.svg)](https://packagist.org/packages/squatto/grafite-formmaker)

The FormMaker package provides a set of tools for generating HTML forms with as little as 1 line of code. Don't want to write boring HTML, neither do we. The FormMaker will generate error containers, all fields defined by either the table or object column types, or if you prefer to have more control define a config. In the case that you want to write more than 1 line of code, FormMaker comes with the InputMaker service as well. With the InputMaker you can create any form of input, including html for Eloquent relationships.

##### Author(s):
* [Matt Lantz](https://github.com/mlantz) ([@mattylantz](http://twitter.com/mattylantz), mattlantz at gmail dot com) - original [grafite/formmaker package](https://packagist.org/packages/grafite/formmaker) author
* [Scott Carpenter](https://github.com/squatto) - current package author

## Requirements

1. PHP 7.2+
2. OpenSSL
3. Laravel 6.0+

## Compatibility and Support

| Laravel Version | Package Tag | Supported |
|-----------------|-------------|-----------|
| 6.x | 1.4.x | no |
| 5.4.x - 5.8.x | 1.3.x | no |
| 5.4.x | 1.1.x | no |
| 5.3.x | 1.0.x | no |

### Installation

Start a new Laravel project:
```shell script
composer create-project laravel/laravel your-project-name
```

Then run the following to add FormMaker
```shell script
composer require squatto/grafite-formmaker
```

Time to publish those assets!
```shell script
php artisan vendor:publish --provider="Grafite\FormMaker\FormMakerProvider"
```

## Documentation

[https://docs.grafite.ca/utilities/form_maker/]()

## License
FormMaker is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)

### Bug Reporting and Feature Requests
Please add as many details as possible regarding submission of issues and feature requests

### Disclaimer
THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
