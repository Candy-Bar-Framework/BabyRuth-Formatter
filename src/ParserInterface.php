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
 * ParserInterface.
 */
interface ParserInterface
{
    /**
     * __construct().
     *
     * Set any avaliable options for the parser.
     *
     * @param mixed $options The list of avaliable options.
     * @param bool $strict Should the parser run under strict mode.
     *
     * @throws InvalidArgumentException If the options can not be accessed.
     * @throws UnexpectedValueException If the option is not a valid one.
     * @throws InvalidArgumentException If the data type for that option is invalid.
     * @throws DomainException          If the data for that option is still invalid.
     *
     * @return void.
     */
    function __construct($options = [], $strict);
}
