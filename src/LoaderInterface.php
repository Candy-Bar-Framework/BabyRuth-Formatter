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
 * LoaderInterface.
 */
interface LoaderInterface
{
    public function load($path);
}
