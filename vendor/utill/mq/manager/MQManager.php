<?php
/**
 * B2Bilisim Framework 
 *
 * @link      https://github.com/corner82/slim_test for the canonical source repository
 * @copyright Copyright (c) 2016 B2Bilisim (http://www.b2argebilisim.com)
 * @license     
 */

namespace Utill\MQ\Manager;

/**
 * DAL manager extended from Zend\ServiceManager\ServiceManager
 * @author Mustafa Zeynel Dağlı
 */
class MQManager extends \Zend\ServiceManager\ServiceManager {
    
    public function __construct(\Zend\ServiceManager\ConfigInterface $config = null) {
        parent::__construct($config);
    }
}


