<?php
/**
 * B2Bilisim Framework 
 *
 * @link      https://github.com/corner82/slim_test for the canonical source repository
 * @copyright Copyright (c) 2016 B2Bilisim (http://www.b2argebilisim.com)
 * @license     
 */

namespace Services\Filter;


/**
 * service manager layer for filter functions
 * @author Mustafa Zeynel Dağlı
 * @version 13/01/2016
 */
class FilterChainerCustom implements \Zend\ServiceManager\FactoryInterface {
    
    /**
     * service ceration via factory on zend service manager
     * @param \Zend\ServiceManager\ServiceLocatorInterface $serviceLocator
     * @return Utill\Strip\Strip
     */
    public function createService(\Zend\ServiceManager\ServiceLocatorInterface $serviceLocator) {
        // Create a filter chain and filter for usage
        $filterChainerCustom = new \Utill\Strip\Strip();
        return $filterChainerCustom;

    }

}
