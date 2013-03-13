<?php
namespace Put\Tests;

use Put\Framework\Assert;
use Put\Framework\AssertFailedException;

class AssertTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     * @expectedException Put\Framework\AssertionFailedException
     */
    public function shouldFail()
    {
        Assert::fail('Test failed');
    }

    /**
     * @test
     */
    public function shouldAssertEqualsObjects()
    {
        Assert::assertEquals(new \StdClass, new \StdClass);
    }

    /**
     * @test
     * @expectedException Put\Framework\AssertionFailedException
     * @expectedExceptionMessage expected: <stdClass> but was <Put\Tests\AssertTest>
     */
    public function shouldNotAssertEqualsObjects()
    {
        Assert::assertEquals(new \StdClass, $this);
    }

}
