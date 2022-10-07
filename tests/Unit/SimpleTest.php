<?php

namespace Tests\Unit;

use Saulius\Kh001\Simple;
use PHPUnit\Framework\TestCase;

use function PHPUnit\Framework\assertEquals;

final class SimpleTest extends TestCase
{
    public function test_if_works() {
        $x = new Simple;
        assertEquals($x->hello("KH"), "Hello world KH");
    }
}