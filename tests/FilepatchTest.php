<?php
/**
 * Tests for FilePatch
 */

use PHPUnit\Framework\TestCase;
use Filepatch\Filepatch;

class FilepatchTest extends TestCase {
    private Filepatch $instance;

    protected function setUp(): void {
        $this->instance = new Filepatch(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Filepatch::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
