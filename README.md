# GoogleCapcay
**Google Capcay** merupakan PHP Library untuk verfikasi Google Captcha.
Berikut cara penggunaan **Google Capcay**

Install dulu dari composer:
```bash
>$ composer require amrikasir/googlecapcay
```

baru deh di PHPnya.
```php
<?php
require_once __DIR__ . '/vendor/autoload.php';

$GoogleCapcay = new GoogleCapcay\GoogleCapcayVerified();

/*
|-------------------------------------------------------------------------------
| Secret Key harus diisi
*/
$GoogleCapcay->SecretKey('Disini Secret Keynya');

/*
|-------------------------------------------------------------------------------
| RespondCode ngak harus diisi, defaultnya ngambil value dari
| $_POST["g-recaptcha-response"]
*/
$GoogleCapcay->RespondCode();

/*
|-------------------------------------------------------------------------------
| Terakhir Verfikasi deh
|
| Return valuenya JSON dari Google Lho..
*/
$GoogleCapcay->Verified();
```

**Google Capcay** support chaining method

```php
<?php
require_once __DIR__ . '/vendor/autoload.php';

$GoogleCapcay = new GoogleCapcay\GoogleCapcayVerified();

/*
|-------------------------------------------------------------------------------
| Sample Chaining Method
*/
$GoogleCapcay->SecretKey('Disini Secret Keynya')
        ->RespondCode()
        ->Verified();
```

itu aja deh, terima bata, sama cendol aja deh.

tolong di support yaa.., biar bisa pengembangan ke depannya.

ntar niatnya juga bakalan masukin buat nambahin form HTML nya.
