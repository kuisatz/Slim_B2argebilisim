<?php
/**
 * B2Bilisim Framework 
 *
 * @link      https://github.com/corner82/slim_test for the canonical source repository
 * @copyright Copyright (c) 2016 B2Bilisim (http://www.b2argebilisim.com)
 * @license   
 */

namespace BLL;

/**
 * CRUD operations intarefce for common usage
 */
interface DalInterface {
    public function getAll($params = array());
    public function update($params = array());
    public function delete ($params = array());
    public function insert($params = array());
}

