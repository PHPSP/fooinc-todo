<?php
namespace Foobar\Context;

class IndexTest extends \PHPUnit_Framework_Testcase
{
    protected $object;

    public function setUp()
    {
        $this->object = new Index;
    }

    public function tearDown()
    {
        $this->object = null;
    }

    public function testGet()
    {
        $this->assertEquals(
            'Hello World',
            $this->object->get()
        );
    }
}