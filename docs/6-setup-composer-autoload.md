# Setup composer autoload

Checkout branch 6-setup-composer-autoload
Edit composer.json for the following autoload configuration:

|Path                     |Type    |Namespace   |Env | 
|-------------------------|--------|------------|----|
|src                      |PSR-4   |PHPKata     |prod|
|legacy/lib/              |classmap|            |prod| 
|legacy/ClassMapDirect.php|classmap|            |prod|
|legacy/lib/functions.php |filemap |            |prod|
|tests/                   |filemap |PHPKata/Test|dev |