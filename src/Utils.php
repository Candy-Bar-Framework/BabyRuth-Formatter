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
 * Utils.
 */
class Utils
{
    /**
     * element().
     *
     * Validate the array elements.
     *
     * @param array $elementSubject The array to test.
     *
     * @throws InvalidArgumentException If $testSubject is not an array.
     *
     * @return bool Return TRUE if the array is valid else return FALSE.
     */
    public static function element($elementSubject)
    {
    }
    /**
     * depth().
     *
     * Get the depth of an array.
     *
     * @param array $testSubject The array to test.
     *
     * @throws InvalidArgumentException If $testSubject is not an array.
     *
     * @return int Return the array depth.
     */
    public static function depth($testSubject)
    {
        if (!\is_array($testSubject)) {
            throw new Exception\InvalidArgumentException(\sprintf(
                'Invalid data type passed for the 1st argument. Passed `%s`.',
                \htmlspecialchars(\var_export(\serialize($testSubject), \true), \ENT_QUOTES, 'UTF-8')
            ));
        }
        $depth = 1;
        if (empty($testSubject)) {
            goto done;
        }
        foreach ($testSubject as $elementList) {
            if (\is_array($elementList)) {
                $depth += self::depth($elementList);
                break;
            }
        }
        done:
        return (int) $depth;
    }
    /**
     * parse().
     *
     * Parse the ini config file.
     *
     * @return array Return the ini config file in the form of an array.
     */
    public static function parse()
    { 
    }
}
