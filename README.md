# Phalcon Forms
## Multi Text
Phalcon Form element to group text inputs.

> Component for specific use in multiple text fields in editing, not for creation. JavaScript must be used to generate text boxes on data-free forms.

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

// Phones
$phones = new Text("phones[]", array('class' => 'form-control js-mask-phone', 'placeholder' => $this->translate->_('Phone')));
$phones->setLabel($this->translate->_('Phone'));
$phones->setFilters(['striptags', 'trim', 'string']);
		
// -> Edit
if (!is_null($entity)) {
	$entityPhones = array_filter($entity->phones);
	$entityAditionalPhones = array_filter($entity->aditional_phones);

	if (count($entityPhones) > 0) $phones->setDefault($entityPhones[0]);

	if (count($entityAditionalPhones) > 0) {
		$aditionalPhones = new MultiText("aditional_phones[]", ['div-class' => 'cg-phone', 'button-class' => 'remove-phone', 'class' => 'form-control js-mask-phone','placeholder' => $this->translate->_('Phone')]);
		$aditionalPhones->setDefault($entityAditionalPhones);

		$this->add($aditionalPhones);
	}
}

$this->add($phones);
...
```

So, in view use:
```php
{{ form.render('aditional_phones[]') }}
```

This component use JQuery to control input fields:
```javascript
addInputPhone();

function addInputPhone() {
    $(document).ready(function () {
        $(".add-more-phone").click(function () {
            var html = $(".phone").html();
            $(".after-add-more-phone").after(html);
        });
        $("body").on("click", ".remove-phone", function () {
            $(this).parents(".cg-phone").remove();
        });
    });
}
```

This will make the Phalcon correctly apply the filters, validators and *bind()* method to persist in the database.