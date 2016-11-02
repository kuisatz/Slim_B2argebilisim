<?php
/**
 * B2Bilisim Framework 
 *
 * @link      https://github.com/corner82/slim_test for the canonical source repository
 * @copyright Copyright (c) 2016 B2Bilisim (http://www.b2argebilisim.com)
 * @license   
 */
namespace Services;

/**
 * interfac for DAL manager layer set and get purposes
 * @author Mustafa Zeynel Dağlı
 */
interface DalManagerInterface {
    /**
     * injects Dal manager instance extended from Zend
     * service manager instance in Slimm Application
     * @param \Zend\ServiceManager\ServiceLocatorInterface $serviceManager
     * @author Mustafa Zeynel Dağlı
     */
    public function setDalManager(\Zend\ServiceManager\ServiceLocatorInterface $serviceManager);
    
    /**
     * gets Dal manager instance extended from 
     * Zend service manager instance from Slimm Application
     * @return \Zend\ServiceManager\ServiceLocatorInterface
     * @author Mustafa Zeynel Dağlı
     */
    public function getDAlManager();
}

