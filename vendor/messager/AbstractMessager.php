<?php
/**
 * B2Bilisim Framework 
 *
 * @link      https://github.com/corner82/slim_test for the canonical source repository
 * @copyright Copyright (c) 2016 B2Bilisim (http://www.b2argebilisim.com)
 * @license      
 */
namespace Messager;

/**
 * abstract error messager class
 * @author Mustafa Zeynel Dağlı
 * @since 14/01/2016  
 */
abstract class AbstractMessager implements
                    \Messager\MessageBrokerInterface{
    
    /**
     * compare  values as before and after, will be overridden in sub classes
     * @param mixed $valuenew
     * @param mixed $valueold
     * @param mixed $filterName
     */
    public function compareValue($valuenew = null, $valueold = null, $filterName = null, $baseKey = null) {
        
    }

}

