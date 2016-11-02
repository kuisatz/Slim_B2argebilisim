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
class InfoFirmWorkingPersonnelEducationFactory implements \Zend\ServiceManager\FactoryInterface {
    
    public function createService(\Zend\ServiceManager\ServiceLocatorInterface $serviceLocator) {
        $infoFirmWorkingPersonnelEducation = new \DAL\PDO\InfoFirmWorkingPersonnelEducation();
        $slimApp = $serviceLocator->get('slimApp');
        $infoFirmWorkingPersonnelEducation->setSlimApp($slimApp);
        return $infoFirmWorkingPersonnelEducation;
    }

}
