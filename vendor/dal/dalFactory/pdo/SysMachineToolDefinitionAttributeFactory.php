<?php
/**
 * B2Bilisim Framework 
 *
 * @link      https://github.com/corner82/slim_test for the canonical source repository
 * @copyright Copyright (c) 2016 B2Bilisim (http://www.b2argebilisim.com)
 * @license     
 */
namespace DAL\Factory\PDO;


/**
 * Class using Zend\ServiceManager\FactoryInterface
 * created to be used by DAL MAnager
 * @author Okan CİRANĞ
 * created date : 21.04.2016
 */
class SysMachineToolDefinitionAttributeFactory  implements \Zend\ServiceManager\FactoryInterface{
    
    public function createService(\Zend\ServiceManager\ServiceLocatorInterface $serviceLocator) {
        $sysMachineToolDefinitionAttribute = new \DAL\PDO\SysMachineToolDefinitionAttribute();   
        $slimapp = $serviceLocator->get('slimapp') ;            
        $sysMachineToolDefinitionAttribute -> setSlimApp($slimapp); 
        return $sysMachineToolDefinitionAttribute;
      
    }
    
    
}