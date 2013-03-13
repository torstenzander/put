<?php
namespace Put\Tests;

use Put\Framework\TypeCast;

class TypeCastTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @var TypeCast
     */
    private $typeCast;

    public function setUp()
    {
        $this->typeCast = new TypeCast();
    }

    /**
     * @test
     */
    public function shouldCastObjectToString()
    {
        $string = $this->typeCast->castToString(new \StdClass());
        $this->assertEquals('stdClass', $string);
    }

}