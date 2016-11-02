<?php

/**
 * B2Bilisim Framework 
 *
 * @link      https://github.com/corner82/slim_test for the canonical source repository
 * @copyright Copyright (c) 2016 B2Bilisim (http://www.b2argebilisim.com)
 * @license     
 */

namespace BLL\BLL;

/**
 * Business Layer class for report Configuration entity
 */
class SysUnspscCodes extends \BLL\BLLSlim {

    /**
     * constructor
     */
    public function __construct() {
        //parent::__construct();
    }

    /**
     * DAta insert function
     * @param array | null $params
     * @return array
     */
    public function insert($params = array()) {
        $DAL = $this->slimApp->getDALManager()->get('sysUnspscCodesPDO');
        return $DAL->insert($params);
    }

    /**
     * Data update function
     * @param array $params
     * @return array
     */
    public function update($params = array()) {
        $DAL = $this->slimApp->getDALManager()->get('sysUnspscCodesPDO');
        return $DAL->update($params);
    }

    /**
     * Data delete function
     * @param array $params
     * @return array
     */
    public function delete($params = array()) {
        $DAL = $this->slimApp->getDALManager()->get('sysUnspscCodesPDO');
        return $DAL->delete($params);
    }

    /**
     * get all data
     * @param array $params
     * @return array
     */
    public function getAll($params = array()) {
        $DAL = $this->slimApp->getDALManager()->get('sysUnspscCodesPDO');
        return $DAL->getAll($params);
    }

    /**
     * Function to fill datagrid on user interface layer
     * @param array | null $params
     * @return array
     */
    public function fillGrid($params = array()) {

        $DAL = $this->slimApp->getDALManager()->get('sysUnspscCodesPDO');
        $resultSet = $DAL->fillGrid($params);
        return $resultSet['resultSet'];
    }

    /**
     * Function to get datagrid row count on user interface layer
     * @param array $params
     * @return array
     */
    public function fillGridRowTotalCount($params = array()) {
        $DAL = $this->slimApp->getDALManager()->get('sysUnspscCodesPDO');
        $resultSet = $DAL->fillGridRowTotalCount($params);
        return $resultSet['resultSet'];
    }

      /**
     * Function to fill text on user interface layer
     * @param array $params
     * @return array
     */
    public function getUnspscCodes($params = array()) {

        $DAL = $this->slimApp->getDALManager()->get('sysUnspscCodesPDO');
        $resultSet = $DAL->getUnspscCodes($params);
        return $resultSet['resultSet'];
    }

  
 
       /**
     * Function to fill text on user interface layer
     * @param array $params
     * @return array
     */
    public function fillUnspscCodesTree($params = array()) {        
        $DAL = $this->slimApp->getDALManager()->get('sysUnspscCodesPDO');     
        return $DAL->fillUnspscCodesTree($params);
    }
        /**
     * Function to get datagrid row count on user interface layer
     * @param array $params
     * @return array
     */
    public function fillUnspscCodesTreeRtc($params = array()) {
        $DAL = $this->slimApp->getDALManager()->get('sysUnspscCodesPDO');
        $resultSet = $DAL->fillUnspscCodesTreeRtc($params);
        return $resultSet['resultSet'];
    }

    
}
