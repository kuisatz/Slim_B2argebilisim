<?php
/**
 * B2Bilisim Framework 
 *
 * @link      https://github.com/corner82/slim_test for the canonical source repository
 * @copyright Copyright (c) 2016 B2Bilisim (http://www.b2argebilisim.com)
 * @license   
 */
namespace Utill\Dal;

final class Helper {
    
    
    public static function haveRecord($result = null) {
        if(isset($result['resultSet'][0]['control'])) return true;
        return false;
    }
}

