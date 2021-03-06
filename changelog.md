# Change Log - FormMaker
All notable changes to this project will be documented in this file.
This project adheres to [Semantic Versioning](http://semver.org/).
----


## [v1.6.6] - 2021-03-18

### Changed
- Change the IDs used within tabs/tab panes

## [v1.6.5] - 2021-03-17

### Added
- Added "html" field type to output raw HTML.
- This can be used to do things like containing fields in a Bootstrap card
  by outputting the card opening HTML, then the fields, then the card closing HTML

This example config would contain the "Title" and "Description" fields within a Bootstrap card:

```php
[
    '_html-info-card-open' => [
        'type' => 'html',
        'html' => '
            <div class="card">
                <h4 class="card-header">Product Information</h4>
                <div class="card-body">
        ',
    ],
    'title' => [
        'type' => 'string',
    ],
    'description' => [
        'type' => 'string',
    ],
    '_html-info-card-close' => [
        'type' => 'html',
        'html' => '
                </div>
            </div>
        ',
    ],
];
````

## [v1.6.4] - 2021-03-16

### Fixed
- Added tab rendering to all possible form generation methods (table, array, object)

## [v1.6.3] - 2021-03-16

### Added
- Added "tab" field type to make it possible to separate your form fields into tabs
  This is done using [Bootstrap navigation tabs](https://getbootstrap.com/docs/4.0/components/navs/#tabs)

Example field config:

```php
[
    'type'   => 'tab',
    'label'  => 'Pricing',
    'active' => true,
];
````

## [v1.6.2] - 2021-02-25

### Fixed
- Ensure that setting `default_value` on a field is seen as the field's value being populated.
  This allows you to set a default value on a `<textarea>`, for instance.

## [v1.6.1] - 2020-09-16

### Changed
- Merged in changes from v1.5.4

## [v1.6.0] - 2020-09-15

### Changed
- Added Laravel 8 support

## [v1.5.4] - 2020-09-16

### Added
- Added "group_class" field option to append class(es) to the field's group/container `<div>`

Example field config:

```php
[
    'agreement' => [
        'type'        => 'checkbox',
        'group_class' => 'user-agreement',
        'alt_name'    => 'I Agree',
    ],
];
```

Resulting HTML. Note the container `<div>` class.

```html
<div class="form-group user-agreement">
    <div class="form-check checkbox">
        <label for="Agreement" class="form-check-label">
            <input id="Agreement" type="checkbox" name="agreement" class="form-check-input">
            I Agree
        </label>
    </div>
</div>
```

## [v1.5.3] - 2020-08-26

### Fixed
- Fixed the bootstrap classes on checkbox/radio inputs

## [v1.5.2] - 2020-08-26

### Added
- Added "null_text" field option to change the text of the null `<option>` in a nullable `<select>`

## [v1.5.1] - 2020-08-26

### Added
- Added "separator" field type that outputs a simple `<hr>` (plus any custom attributes)
- Added "override_class" field option that replaces the entire class with the option value rather
  than appending it to the class from the package config the way that the "class" field option does

## [v1.5.0] - 2020-08-08

### Changed
- Require PHP 7.3+, Laravel 7.0+
- Updated dependencies

## [v1.4.2] - 2020-07-24

### Added
- Ability to provide help text on inputs

## [v1.4.1] - 2020-05-25

### Changed
- Updated dev dependencies

## [v1.4.0] - 2020-02-17

### Changed
- Forked package to [squatto/grafite-formmaker](https://github.com/squatto/grafite-formmaker)
  because the v1.3 branch of [GrafiteInc/FormMaker](https://github.com/GrafiteInc/FormMaker) is no longer being maintained and compatibility ended at Laravel 5.8.x
  - FormMaker v2.x completely changes the way you create forms and is not backward compatible at all
- Changed composer package name to `squatto/grafite-formmaker`
- Require PHP 7.2+, Laravel 6.0+
- Updated dev dependencies

## [v1.3.6] - 2019-07-04

### Fixed
- Issue with Laravel 5.8

## [v1.3.5] - 2019-06-18

### Fixed
- Issue with 5.8 compatibility

## [v1.3.4] - 2018-08-28

### Added
- Ability to handle arrays for custom attributes

## [v1.3.3] - 2018-07-02

### Fixed
- Issue with non array attributes

## [v1.3.2] - 2018-04-19

### Fixed
- Allows customizable for attribute on labels

## [v1.3.1] - 2018-04-14

### Added
- New customizable Ids

### Fixed
- Issue with bootstrap input wrapping

## [v1.3.0] - 2018-03-19

### Changed
- New branding

## [v1.2.10] - 2018-03-06

### Changed
- Makes checkboxes bootstrap 4 compatible

## [v1.2.9] - 2018-02-27

### Fixed
- Issue with null relationships

## [v1.2.9] - 2018-01-25

### Fixed
- Fixed issue with null values for relationships

## [v1.2.8] - 2018-01-09

### Fixed
- Issue with dates as strings

## [v1.2.7] - 2018-01-02

### Fixed
- Dates and relationships
- Minor coorection for checkboxes

## [v1.2.6] - 2017-11-27

### Added
- New name option
- New set columns layout option

### Fixed
- Issue with relationships
- Issue with horizontal selects

## [v1.2.5] - 2017-11-25

### Fixed
- Fixed issue for double quotes

## [v1.2.4] - 2017-10-30

### Added
- New theme support

### Changed
- Version support

## [v1.2.3] - 2017-10-27

### Added
- Nullable option for dropdowns

## [v1.2.2] - 2017-10-24

### Fixed
- Issue with default class for checkboxes

## [v1.2.1] - 2017-10-16

### Added
- Nullable option for dropdowns

### Fixed
- Exception with relationships
- Custom class config

## [v1.2.0] - 2017-08-31

### Changed
- Laravel 5.5 support

## [v1.1.4] - 2017-08-25

### Fixed
- Minor issue with test setup

## [v1.1.3] - 2017-08-25

### Added
- Support for horizontal forms
- Support for multiple selects and hasMany and belongsToMany relationships

### Fixed
- Minor dbal issue

## [v1.1.2] - 2017-05-15

### Changed
- Dropped forcing first letter uppercase on labels etc

### Fixed
- Issue with html class wrappers

## [v1.1.1] - 2017-03-29

### Fixed
- Issue with deleted_at columns

## [v1.1.0] - 2017-01-27

### Changed
- Laravel 5.4 compatibility

## [v1.0.15] - 2017-01-24

### Added
- New default_value config

### Changed
- Set compatibility guide
- Minor CS changes

### Fixed
- Issue with null fields

## [v1.0.14] - 2017-01-09

### Fixed
- Repaired issue with certain number values

## [v1.0.13] - 2016-12-20

### Fixed
- Issue with setting columns in fromTable()

## [v1.0.12] - 2016-12-03

### Changed
- getTableColumns moved connection to class level setting

### Fixed
- Improved column reading
- Fixed issue with multiple selects

## [v1.0.11] - 2016-11-27

### Fixed
- Fixes an issue with setting the default connection

## [v1.0.10] - 2016-11-26

### Added
- Now supports multiple select for select inputs

### Changed
- Improved the nesting detection and tests

### Fixed
- Issue with nested properties in names

## [v1.0.9] - 2016-11-17

### Fixed
- Tagging realignment

## [v1.0.8] - 2016-11-16

### Added
- Now you can set the connection for the table
- More unit tests

## [v1.0.7] - 2016-10-28

### Fixed
- Issue with filling in textareas with names
- Removed underscores from placeholders

## [v1.0.6] - 2016-10-20

### Changed
- Allowing alternate relationship names

## [v1.0.5] - 2016-10-13

### Fixed
- Issue with classes

## [v1.0.4] - 2016-08-26

### Fixed
- Composer fixes

## [v1.0.3] - 2016-08-24

### Added
- Support for Laravel 5.3

## [v1.0.2] - 2016-07-28

### Added
- New ability to specify methods and params for relationship inputs
- More unit tests

## [v1.0.1] - 2016-07-24

### Changed
- Minor testing improvements

## [v1.0.0] - 2016-07-18

### Changed
- Initial build separating from Laracogs
