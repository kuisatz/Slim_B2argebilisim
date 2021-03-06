<?php
/**
 * B2Bilisim Framework 
 *
 * @link      https://github.com/corner82/slim_test for the canonical source repository
 * @copyright Copyright (c) 2016 B2Bilisim (http://www.b2argebilisim.com)
 * @license     
 */

namespace Messager\Validator;

interface ValidationMessagerInterface{
    public function setValidationMessage($validationMessage = null);
    public function getValidationMessage();
    public function addValidationMessage($validationMessage = null);
}

