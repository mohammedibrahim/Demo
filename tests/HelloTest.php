<?php

/**
 * @coversDefaultClass \Dracony\Demo\Hello
 */
class HelloTest extends \PHPUnit\Framework\TestCase
{
    protected $hello;
    
    public function setUp()
    {
        $this->hello = new \Dracony\Demo\Hello();
    }
    
    /**
     * @covers ::world
     */
    public function testWorld()
    {
        $this->assertSame('world', $this->hello->world());
    }

    public function testAPI()
    {
        $response = (file_get_contents('http://localhost/'));

        $this->assertSame('Hello from the other side.', $response);
    }
}