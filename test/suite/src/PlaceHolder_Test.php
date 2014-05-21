<?php

class PlaceHolder_Test extends PHPUnit_Framework_TestCase
{
    protected function setUp()
    {
        parent::setUp();
    }

    public function testInstance()
    {
        $this->assertInstanceOf(
            '\Vendor\Project\PlaceHolder',
            new \Vendor\Project\Placeholder
        );
    }
}
