<?php
/**
 * B2Bilisim Framework 
 *
 * @link      https://github.com/corner82/slim_test for the canonical source repository
 * @copyright Copyright (c) 2016 B2Bilisim (http://www.b2argebilisim.com)
 * @license    
 */

namespace DAL;

/**
 * abstract DAL class for DAl layer base classes
 * @author Mustafa Zeynel Dağlı
 */
abstract class DalSlim extends AbstractDal
                                implements  \Slim\SlimAppInterface {
    
    /**
     * Slim application instance
     * @var Slim\Slim
     */
    protected $slimApp;
    
    
    /**
     * implemented method from \DAL\DalInterface has been overriden
     * @param array $params
     * @author Mustafa Zeynel Dağlı
     * @since 16/01/2016
     */
    public function haveRecords($params = array()) {
        
    }
    
    /**
     * return slim app
     * @return Slim\Slim
     */
    public function getSlimApp() {
        return $this->slimApp;
    }

    /**
     * sets slim app
     * @param \Slim\Slim $slimApp
     */
    public function setSlimApp(\Slim\Slim $slimApp) {
        $this->slimApp = $slimApp;
    }

   

}
