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
 * service manager layer for filter functions for custom html tags
 * @author Okan CIRAN
 * @version 29.12.2015
 */
class FilterHtmlTagsCustomAdvanced implements \Zend\ServiceManager\FactoryInterface {
    
    /**
     * service ceration via factory on zend service manager
     * @param \Zend\ServiceManager\ServiceLocatorInterface $serviceLocator
     * @return boolean|\PDO
     */
    public function createService(\Zend\ServiceManager\ServiceLocatorInterface $serviceLocator) {
        // Create a filter chain and filter for usage
        $filterChain = new \Zend\Filter\FilterChain();
        $filterChain ->attach(new \Zend\Filter\PregReplace(array(
                        'pattern'     => array(
                                               "/([^A-Za-z0-9])*(iframe)([^A-Za-z0-9])+/i",
                                               "/(SRC=)|(src =)|(src%3d)/i",
                                               "/(SRC=)|(src =)|(src%3d)/i",
                                               "/(href=)|(href =)|(href%3d)|(href)/i",
                                               "/SRC=/i",
                                               "/<EMBED/i",
                                               "/(#)|(%23)/",
                                               "/(\{)|(%7b)/",
                                               //"/(=)|(%3d)/",
                                               "/(!--)|(&#33;&#95;&#95;)/",
                                               "/(<)[^A-Za-z0-9]*(img)/i",
                                               "/([^A-Za-z0-9](eval))|((eval)[^A-Za-z0-9]+)/i",
                                               /*"/HTTP-EQUIV/i",
                                               "/style/i",
                                               "/body/i",
                                               "/HTTP-EQUIV/i",
                                               "/background/i",
                                               "/XML/i",
                                               "/http/i",
                                               "/(<a)|(<\/a>)/i",*/
                                               ),
                        'replacement' => '',
                    ), 200));
        return $filterChain;

    }

}
