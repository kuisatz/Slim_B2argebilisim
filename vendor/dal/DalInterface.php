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
 * interface to used for CRUD operations on DAl layer
 * @author Mustafa Zeynel Dağlı
 */
interface DalInterface {
    public function getAll($params = array());
    public function update($params = array());
    public function delete ($params = array());
    public function insert($params = array());
    public function haveRecords($params = array());
}

