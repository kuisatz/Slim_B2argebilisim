<?php
/**
 * B2Bilisim Framework 
 *
 * @link      https://github.com/corner82/slim_test for the canonical source repository
 * @copyright Copyright (c) 2016 B2Bilisim (http://www.b2argebilisim.com)
 * @license   
 */

namespace Utill\Factories;

/**
 * base class for factory type operations
 * @author Mustafa Zeynel Dağlı
 * @since 11/02/2016
 */
abstract  class AbstractFactory{
    abstract protected function getUtility($identifier = null, $params = null);
}
