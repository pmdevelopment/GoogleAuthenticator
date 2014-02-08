Google Authenticator Symfony2 Bundle
=====================

Original: PHPGangsta/GoogleAuthenticator
* Copyright (c) 2012, [http://www.phpgangsta.de](http://www.phpgangsta.de)
* Author: Michael Kliewe, [@PHPGangsta](http://twitter.com/PHPGangsta)
* Licensed under the BSD License.


Forked for Usage as Symfony2 Bundle and composer

## Install

Add to composer:

```js
  "pmdevelopment/google-authenticator-bundle": "dev-master"
```

Add to kernel:

```php
  new PM\Bundle\GoogleAuthenticatorBundle\PMGoogleAuthenticatorBundle(),
```

## Usage

```php
         /* @var $ga GoogleAuthenticatorService */
        $ga = $this->get("pm.googleauthenticator");
```

For Examples see [example/example1.php]. As additional function use getQrCode() to get the Image.