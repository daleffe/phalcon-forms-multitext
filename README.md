# Phalcon Forms
## Multi Text
Phalcon Form element to group text inputs.

### Installation
Update your composer.json with following options:
```
{
	"repositories": [
		{
			"type": "vcs",
			"url": "https://github.com/daleffe/phalcon-forms-multitext"
		}
	],
    "require": {
		  "daleffe/phalcon-forms-multitext": "dev-master",
    }
}
```
> I will check how to put this package in Packagist.org.

### Usage
In your forms class use:
``` php
use Daleffe\Phalcon\Forms\Element\MultiText;

...
```

So, in view use:
```php
{{ form.render('status') }}
```

This will make the Phalcon correctly apply the filters, validators and *bind()* method to persist in the database.