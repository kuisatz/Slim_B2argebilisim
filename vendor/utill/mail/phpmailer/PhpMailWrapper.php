<?php
/**
 * B2Bilisim Framework 
 *
 * @link      https://github.com/corner82/slim_test for the canonical source repository
 * @copyright Copyright (c) 2016 B2Bilisim (http://www.b2argebilisim.com)
 * @license    
 */

namespace Utill\Mail\PhpMailer;

// require_once '../../../phpmailer/phpmailer/PhpMailerAutoload.php';

class PhpMailWrapper extends \Utill\Mail\AbstractMailWrapper implements 
                                                            \Utill\Mail\DebugMailInterface{

    /**
     * PHPmailer obj
     * @var \PHPMailser
     */
    protected $mailObj;
    
                                                         
    /**
     *  enables SMTP debug information (for testing) 
     *  1 = errors and messages   
     *  2 = messages only                                               
     */
    protected $DebugMode = 1;


    public function __construct() {
        $this->mailObj = new \PHPMailer();
    }
    
    /**
     * set debug mode
     * @param int $debugMode
     */
    public function setDebugMode($debugMode = null) {
        $this->DebugMode = $debugMode;
    }

    /**
     * get debug mode
     * @return int
     */
    public function getDebugMode() {
        return $this->DebugMode;
    }

}
