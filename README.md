## Canadian postal code validator for Laravel 4.x

Just what it says.

### Usage

1) Install with composer

```js
{
  "require": {
    "molotov/laravel-canpost-validator": "1.0.*"
  }
}
```

2) Add the service provider to your project's autoloader in `/app/config/app.php`

```php
'providers' => array(
  // ...
  'Molotov\CanpostValidator\CanpostValidatorServiceProvider'
);
```

3) Use it by adding `canadian_postal_code` to your attribute's validation rules.

```php
$rules = array('postal_code' => 'canadian_postal_code|required');
Validator::make($attributes, $rules);
```
