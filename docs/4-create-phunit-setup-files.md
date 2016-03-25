# Create phpunit setup files

/phpunit.xml.dist
```
<phpunit bootstrap="tests/bootstrap.php">
    <testsuites>
        <testsuite name="php-kata">
            <directory>tests</directory>
        </testsuite>
    </testsuites>
</phpunit>
```

/tests/bootstrap.php
```
<?php
require_once __DIR__ . '/../vendor/autoload.php';
```