<?php
// tests/Controller/LuckyControllerTest.php

declare(strict_types=1);
namespace App\Tests\LuckyControllerTest;

use App\Controller\LuckyController;
use PHPUnit\Framework\TestCase;
class LuckyControllerTest extends TestCase
{
    public function testNumber()
    {
        $calculator = new LuckyController();
        $result = $calculator->number();

        $this->assertGreaterThanOrEqual( 10,$result);
        $this->assertLessThanOrEqual( 200,$result);
    }
}
