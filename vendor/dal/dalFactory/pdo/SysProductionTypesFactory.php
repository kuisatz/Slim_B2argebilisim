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
 * @author Okan CIRAN
 * created date : 20.04.2016
 */
class SysProductionTypesFactory  implements \Zend\ServiceManager\FactoryInterface{
    
    public function createService(\Zend\ServiceManager\ServiceLocatorInterface $serviceLocator) {
        $sysProductionTypes  = new \DAL\PDO\SysProductionTypes();
        $slimapp = $serviceLocator->get('slimapp') ;            
        $sysProductionTypes -> setSlimApp($slimapp);
        return $sysProductionTypes;
      
    }
    
    
}