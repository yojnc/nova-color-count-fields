# Laravel Nova Color Counter Field
A colorable notifications in text or textarea Nova fields about min chars reached.
![](https://github.com/yojnc/nova-color-count-fields/blob/assets/images/textarea_couter.png)
## Installation

Install the package into a Laravel app that uses [Nova](https://nova.laravel.com) with Composer:

```bash
composer require yojnc/nova-color-count-fields
```

## Usage
You must call minChars() method on field to show counter
```php
minChars($count)
```
#
### Text Field
Add the field to your resource in the ```fields``` method:
```php
use YojNC\Fields\ColorCountText;

ColorCountTextArea::make('Title')->minChars($minChars), // integer
```
![](https://github.com/yojnc/nova-color-count-fields/blob/assets/images/text.png)
The field is displayed as an `<input type="text">` element.

The field extends the `Laravel\Nova\Fields\Text` field, so all the usual methods are available.

### Textarea Field
```php
use YojNC\Fields\ColorCountTextArea;

ColorCountTextArea::make('Title')->minChars($minChars), // integer
```
![](https://github.com/yojnc/nova-color-count-fields/blob/assets/images/textarea.png)
The field is displayed as an `<textarea></textare>` element.

The field extends the `Laravel\Nova\Fields\TextArea` field, so all the usual methods are available.

### Available methods
To show warning (yellow) between danger and success use this
```php
use YojNC\Fields\ColorCountTextArea;

ColorCountTextArea::make('Title')->minChars($count)->errorUntil($percentageInt), //default $pectentage = 80
```
To show counter inside alert box use this
```php
use YojNC\Fields\ColorCountTextArea;

ColorCountTextArea::make('Title')->minChars($count)->withCounter($showBool), //default $showBool = false
```
![](https://github.com/yojnc/nova-color-count-fields/blob/assets/images/textarea_couter.png)

