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
        ]
    ];
    public function testDepth()
    {
        $this->expectException(Exception\InvalidArgumentException::class);
        Utils::depth('');
    }
    public function testDepth2()
    {
        $this->expectException(Exception\InvalidArgumentException::class);
        Utils::depth(0);
    }
    public function testDepth()
    {
        $this->expectException(Exception\InvalidArgumentException::class);
        Utils::depth(0.0);
    }
    public function testDepth()
    {
        $this->expectException(Exception\InvalidArgumentException::class);
        Utils::depth((object) array('1', '2', '3'));
    }
    public function testDepth()
    {
        $this->expectException(Exception\InvalidArgumentException::class);
        Utils::depth((object) array('1', '2', '3'));
    }
}
