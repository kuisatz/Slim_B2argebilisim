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
 * created date : 08.02.2016
 */
class SysOsbConsultantsFactory  implements \Zend\ServiceManager\FactoryInterface{
    
    public function createService(\Zend\ServiceManager\ServiceLocatorInterface $serviceLocator) {
        $sysOsbConsultants  = new \DAL\PDO\SysOsbConsultants();   
        $slimapp = $serviceLocator->get('slimapp') ;            
        $sysOsbConsultants -> setSlimApp($slimapp);
        
 
        
        return $sysOsbConsultants;
      
    }
    
    
}