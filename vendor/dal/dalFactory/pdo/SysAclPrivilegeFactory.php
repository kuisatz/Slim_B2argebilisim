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
 * created date : 13.12.2015
 */
class SysAclPrivilegeFactory  implements \Zend\ServiceManager\FactoryInterface{
    
    public function createService(\Zend\ServiceManager\ServiceLocatorInterface $serviceLocator) {
        $sysAclPrivilege  = new \DAL\PDO\SysAclPrivilege()   ;         
        $slimapp = $serviceLocator->get('slimapp') ;            
        $sysAclPrivilege -> setSlimApp($slimapp);
        
 
        
        return $sysAclPrivilege;
      
    }
    
    
}