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
 * class for PDO postgreSQl connect variables
 */
class PostgreSQLConnectPDOConfig {
    
    /**
     * PDO connection configuration options,
     * @var array
     */
    public static $config = array(
            /*\PDO::ATTR_PERSISTENT => true*/);
    
    /**
     * returns static config array
     * @return array | null
     */
    public static function getConfig() {
        return self::$config;
    }
    
    
}

