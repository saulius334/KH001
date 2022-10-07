<?php

namespace Tests\Unit;

use Saulius\Kh001\Start\Simple;
use PHPUnit\Framework\TestCase;

use function PHPUnit\Framework\assertEquals;

final class SimpleTest extends TestCase
{
    public function test_if_works() : void {
        $simple = new Simple;
        assertEquals($simple->hello("KH"), "Hello world KH");
        assertEquals($simple->hello(), "Hello world Kilo Health Academy");
    }
}