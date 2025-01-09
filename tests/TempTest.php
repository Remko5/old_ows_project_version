<?php

namespace Test;

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

final class TempTest extends TestCase
{
    public static function addTileToBoardProvider(): array
    {
        return
        [
            [1, 0], [0,1];
        ];
    }

    #[DataProvider('switchPlayerProvider')]
    public function testSwitchPlayer(int $player, int $expectedResult): void
    {
        $result = $player - 1;
        $this->assertEquals($expectedResult, $result);
    }
}
