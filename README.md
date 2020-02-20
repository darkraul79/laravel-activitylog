# Log activity inside your Laravel app

[![Latest Version on Packagist](https://img.shields.io/packagist/v/Darkraul79/laravel-activitylog.svg?style=flat-square)](https://packagist.org/packages/Darkraul79/laravel-activitylog)
[![Build Status](https://img.shields.io/travis/Darkraul79/laravel-activitylog/master.svg?style=flat-square)](https://travis-ci.org/Darkraul79/laravel-activitylog)
[![Quality Score](https://img.shields.io/scrutinizer/g/Darkraul79/laravel-activitylog.svg?style=flat-square)](https://scrutinizer-ci.com/g/Darkraul79/laravel-activitylog)
[![StyleCI](https://styleci.io/repos/61802818/shield)](https://styleci.io/repos/61802818)
[![Total Downloads](https://img.shields.io/packagist/dt/Darkraul79/laravel-activitylog.svg?style=flat-square)](https://packagist.org/packages/Darkraul79/laravel-activitylog)


Calling `$activity->changes()` will return this array:

```php
[
   'attributes' => [
        'name' => 'updated name',
        'text' => 'Lorum',
    ],
    'old' => [
        'name' => 'original name',
        'text' => 'Lorum',
    ],
];
```


## Documentation
You'll find the documentation on [https://docs.Darkraul79.be/laravel-activitylog/v2](https://docs.Darkraul79.be/laravel-activitylog/v2).

Find yourself stuck using the package? Found a bug? Do you have general questions or suggestions for improving the activity log? Feel free to [create an issue on GitHub](https://github.com/Darkraul79/laravel-activitylog/issues), we'll try to address it as soon as possible.

If you've found a security issue please mail [freek@Darkraul79.be](mailto:freek@Darkraul79.be) instead of using the issue tracker.


## Installation

You can install the package via composer:

``` bash
composer require Darkraul79/laravel-activitylog
```

The package will automatically register itself.

You can publish the migration with:
```bash
php artisan vendor:publish --provider="Darkraul79\Activitylog\ActivitylogServiceProvider" --tag="migrations"
```

*Note*: The default migration assumes you are using integers for your model IDs. If you are using UUIDs, or some other format, adjust the format of the subject_id and causer_id fields in the published migration before continuing.

After publishing the migration you can create the `activity_log` table by running the migrations:


```bash
php artisan migrate
```

You can optionally publish the config file with:
```bash
php artisan vendor:publish --provider="Darkraul79\Activitylog\ActivitylogServiceProvider" --tag="config"
```

This is the contents of the published config file:

```php
return [

    /*
     * If set to false, no activities will be saved to the database.
     */
    'enabled' => env('ACTIVITY_LOGGER_ENABLED', true),

    /*
     * When the clean-command is executed, all recording activities older than
     * the number of days specified here will be deleted.
     */
    'delete_records_older_than_days' => 365,

    /*
     * If no log name is passed to the activity() helper
     * we use this default log name.
     */
    'default_log_name' => 'default',

    /*
     * You can specify an auth driver here that gets user models.
     * If this is null we'll use the default Laravel auth driver.
     */
    'default_auth_driver' => null,

    /*
     * If set to true, the subject returns soft deleted models.
     */
    'subject_returns_soft_deleted_models' => false,

    /*
     * This model will be used to log activity. The only requirement is that
     * it should be or extend the Darkraul79\Activitylog\Models\Activity model.
     */
    'activity_model' => \Darkraul79\Activitylog\Models\Activity::class,
    
    /*
     * This is the name of the table that will be created by the migration and
     * used by the Activity model shipped with this package.
     */
    'table_name' => 'activity_log',
];

```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information about recent changes.

## Testing

``` bash
$ composer test
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security

If you discover any security related issues, please email freek@Darkraul79.be instead of using the issue tracker.

## Postcardware

You're free to use this package, but if it makes it to your production environment we highly appreciate you sending us a postcard from your hometown, mentioning which of our package(s) you are using.

Our address is: Darkraul79, Samberstraat 69D, 2060 Antwerp, Belgium.

We publish all received postcards [on our company website](https://Darkraul79.be/en/opensource/postcards).

## Credits

- [Freek Van der Herten](https://github.com/freekmurze)
- [Sebastian De Deyne](https://github.com/sebastiandedeyne)
- [All Contributors](../../contributors)

## Support us

Darkraul79 is a webdesign agency based in Antwerp, Belgium. You'll find an overview of all our open source projects [on our website](https://Darkraul79.be/opensource).

Does your business depend on our contributions? Reach out and support us on [Patreon](https://www.patreon.com/Darkraul79). 
All pledges will be dedicated to allocating workforce on maintenance and new awesome stuff.

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
