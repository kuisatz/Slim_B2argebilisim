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
class InfoFirmAddress extends \BLL\BLLSlim{
    
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
        $DAL = $this->slimApp->getDALManager()->get('infoFirmAddressPDO');
        return $DAL->insert($params);
    }
    
      
    /**
     * Check Data function
     * @param array | null $params
     * @return array
     */
    public function haveRecords($params = array()) {
        $DAL = $this->slimApp->getDALManager()->get('infoFirmAddressPDO');
        return $DAL->haveRecords($params);
    }
    
    
    /**
     * Data update function
     * @param array | null $params
     * @return array
     */
    public function update($params = array()) {
        $DAL = $this->slimApp->getDALManager()->get('infoFirmAddressPDO');
        return $DAL->update($params);
    }
    
    /**
     * Data delete function
     * @param array | null $params
     * @return array
     */
    public function delete( $params = array()) {
        $DAL = $this->slimApp->getDALManager()->get('infoFirmAddressPDO');
        return $DAL->delete($params);
    }

    /**
     * get all data
     * @param array | null $params
     * @return array
     */
    public function getAll($params = array()) {
        $DAL = $this->slimApp->getDALManager()->get('infoFirmAddressPDO');
        return $DAL->getAll($params);
    }
    
    /**
     * Function to fill datagrid on user interface layer
     * @param array | null $params
     * @return array
     */
    public function fillGrid ($params = array()) {
        $DAL = $this->slimApp->getDALManager()->get('infoFirmAddressPDO');
        $resultSet = $DAL->fillGrid($params);  
        return $resultSet['resultSet'];
    }
 
    
    /**
     * Function to get datagrid row count on user interface layer
     * @param array | null $params
     * @return array
     */
    public function fillGridRowTotalCount($params = array()) {
        $DAL = $this->slimApp->getDALManager()->get('infoFirmAddressPDO');
        $resultSet = $DAL->fillGridRowTotalCount($params);  
        return $resultSet['resultSet'];
    }
    
     /**
     * Data delete action function
     * @param array | null $params
     * @return array
     */
    public function deletedAct($params = array()) {
        $DAL = $this->slimApp->getDALManager()->get('infoFirmAddressPDO');
        return $DAL->deletedAct($params);
    }
     
  
    /**
     * Data update function   
     * @param array $params
     * @return array
     */ 
    public function fillSingularFirmAddress ($params = array()) {
        $DAL = $this->slimApp->getDALManager()->get('infoFirmAddressPDO');
        $resultSet = $DAL->fillSingularFirmAddress($params);  
        return $resultSet['resultSet'];
    }
       
     
    /**
     * Function to get datagrid row count on user interface layer
     * @param array | null $params
     * @return array
     */
    public function fillSingularFirmAddressRtc($params = array()) {
        $DAL = $this->slimApp->getDALManager()->get('infoFirmAddressPDO');
        $resultSet = $DAL->fillSingularFirmAddressRtc($params);  
        return $resultSet['resultSet'];
    }
    
    
    
     /**
     * Data update function   
     * @param array $params
     * @return array
     */ 
    public function fillUsersFirmAddressNpk ($params = array()) {
        $DAL = $this->slimApp->getDALManager()->get('infoFirmAddressPDO');
        $resultSet = $DAL->fillUsersFirmAddressNpk($params);  
        return $resultSet['resultSet'];
    }
    
    /**
     * Function to get datagrid row count on user interface layer
     * @param array | null $params
     * @return array
     */
    public function fillUsersFirmAddressNpkRtc($params = array()) {
        $DAL = $this->slimApp->getDALManager()->get('infoFirmAddressPDO');
        $resultSet = $DAL->fillUsersFirmAddressNpkRtc($params);  
        return $resultSet['resultSet'];
    }
    
   
    
}

