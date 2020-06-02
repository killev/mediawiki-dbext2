PoC that allows the extension to add a new type of database to the installer

[https://phabricator.wikimedia.org/T253248](https://phabricator.wikimedia.org/T253248)

Tested with LocalSettings.php:
```php
<?php
wfLoadExtension( 'DBExt' );
```
