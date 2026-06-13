<?php
/**
 * Tests for CoinIota
 */

use PHPUnit\Framework\TestCase;
use Coiniota\Coiniota;

class CoiniotaTest extends TestCase {
    private Coiniota $instance;

    protected function setUp(): void {
        $this->instance = new Coiniota(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Coiniota::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
