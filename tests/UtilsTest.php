<?php
 /**
  * This file is a part of LaxovePHP.
  *
  * @copyright 2017-2018 LaxovePHP.
  *
  * @link    <https://github.com/LaxovePHP/DotEnv> Github Repository.
  * @license <https://github.com/LaxovePHP/DotEnv/blob/master/LICENSE> New BSD License.
  */
namespace LaxovePHP\DotEnv;
/**
 * PHPUnit\Framework\TestCase.
 */
use \PHPUnit\Framework\TestCase;
/**
 * UtilsTest.
 */
final class UtilsTest extends TestCase
{
    private $testCases = [
        [
            '0',
            '1',
            '2'
        ],
        [
            '0',
            '1',
            '2' => [
                '0'
            ]
        ],
        [
            '0' => [
                '0',
                '1',
                '2'
            ],
            '1' => [
                '0',
                '1',
                '2'
            ],
            '2' => [
                '0',
                '1',
                '2'
            ]
        ],
        [
            '0' => [
                '0' => [
                    '0',
                    '1',
                    '2'
                ],
                '1',
                '2'
            ]
        ],
        [
            '0' => [
                '0' => [
                    '0',
                    '1',
                    '2'
                ],
                '1' => [
                    '0',
                    '1',
                    '2'
                ],
                '2' => [
                    '0',
                    '1',
                    '2'
                ]
            ]
        ],
        [
        ]
    ];
    public function testDepth0()
    {
        $this->expectException(Exception\InvalidArgumentException::class);
        Utils::depth('');
    }
    public function testDepth1()
    {
        $this->expectException(Exception\InvalidArgumentException::class);
        Utils::depth(0);
    }
    public function testDepth2()
    {
        $this->expectException(Exception\InvalidArgumentException::class);
        Utils::depth(0.0);
    }
    public function testDepth3()
    {
        $this->expectException(Exception\InvalidArgumentException::class);
        Utils::depth((object) array('1', '2', '3'));
    }
    public function testDepth4()
    {
        $this->expectException(Exception\InvalidArgumentException::class);
        Utils::depth((object) array('1'));
    }
    public function testDepth5()
    {
        reset($this->testCases);
        $depth0 = Utils::depth($this->testCases[0]);
        $depth1 = Utils::depth($this->testCases[1]);
        $depth2 = Utils::depth($this->testCases[2]);
        $depth3 = Utils::depth($this->testCases[3]);
        $depth4 = Utils::depth($this->testCases[4]);
        $depth5 = Utils::depth($this->testCases[5]);
        $this->assertTrue($depth0 === 1);
        $this->assertTrue($depth1 === 2);
        $this->assertTrue($depth2 === 2);
        $this->assertTrue($depth3 === 3);
        $this->assertTrue($depth4 === 3);
        $this->assertTrue($depth5 === 1);
    }
}
