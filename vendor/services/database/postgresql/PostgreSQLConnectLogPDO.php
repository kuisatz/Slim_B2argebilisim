<?php
/**
 * B2Bilisim Framework 
 *
 * @link      https://github.com/corner82/slim_test for the canonical source repository
 * @copyright Copyright (c) 2016 B2Bilisim (http://www.b2argebilisim.com)
 * @license     
 */

namespace Services\Database\Postgresql;


/**
 * service manager layer for database connection
 * @author Mustafa Zeynel Dağlı
 */
class PostgreSQLConnectLogPDO implements \Zend\ServiceManager\FactoryInterface {
    
    /**
     * service ceration via factory on zend service manager
     * @param \Zend\ServiceManager\ServiceLocatorInterface $serviceLocator
     * @return boolean|\PDO
     */
    public function createService(\Zend\ServiceManager\ServiceLocatorInterface $serviceLocator) {
        try {
            $pdo = new \PDO('pgsql:dbname=b2argebilisim_logs;host=localhost;',
                            'postgres',
                            '1Qaaal123',
                            PostgreSQLConnectPDOConfig::getConfig());
            return $pdo;
        } catch (PDOException $e) {
            return false;
        } 


    }

}
