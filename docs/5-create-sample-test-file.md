# Create sample test file

touch ./tests/SampleTest.php
```
<?php
class SampleTest extends \PHPUnit_Framework_TestCase
{
    public function testSum()
    {
        $this->assertSame(2, 1 + 1);
    }
}
```

Running the test:
./vendor/bin/phpunit -c phpunit.xml.dist tests/