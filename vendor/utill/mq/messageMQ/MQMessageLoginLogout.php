<?php
/**
 * B2Bilisim Framework 
 *
 * @link      https://github.com/corner82/slim_test for the canonical source repository
 * @copyright Copyright (c) 2016 B2Bilisim (http://www.b2argebilisim.com)
 * @license    
 */

namespace Utill\MQ\MessageMQ;

class MQMessageLoginLogout extends \Utill\MQ\MessageMQ\MQMessage {
    
    
    const LOGIN_OPERATAION                 = 42;
    const LOGOUT_OPERATION                 = 43;


    public function __construct() {

    }
}

