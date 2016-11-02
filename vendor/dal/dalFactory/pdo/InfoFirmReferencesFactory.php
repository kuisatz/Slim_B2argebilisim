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
 */
class InfoFirmReferencesFactory implements \Zend\ServiceManager\FactoryInterface {
    
    public function createService(\Zend\ServiceManager\ServiceLocatorInterface $serviceLocator) {
        $infoFirmReferences = new \DAL\PDO\InfoFirmReferences();
        $slimApp = $serviceLocator->get('slimApp');
        $infoFirmReferences->setSlimApp($slimApp);
        return $infoFirmReferences;
    }

}
