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
class ActProcessConfirm extends \BLL\BLLSlim{
    
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
        $DAL = $this->slimApp->getDALManager()->get('actProcessConfirmPDO');
        return $DAL->insert($params);
    }
    
    /**
     * Data update function
     * @param array $params
     * @return array
     */
    public function update($params = array()) {
        $DAL = $this->slimApp->getDALManager()->get('actProcessConfirmPDO');
        return $DAL->update($params);
    }
    
    /**
     * Data delete function
     * @param array $params
     * @return array
     */
    public function delete( $params = array()) {
        $DAL = $this->slimApp->getDALManager()->get('actProcessConfirmPDO');
        return $DAL->delete($params);
    } 
    
    /**
     * get all data
     * @param array $params
     * @return array
     */
    public function getAll($params = array()) {
        $DAL = $this->slimApp->getDALManager()->get('actProcessConfirmPDO');
        return $DAL->getAll($params);
    }
    
    /**
     * Function to fill datagrid on user interface layer
     * @param array | null $params
     * @return array
     */
    public function fillGrid ($params = array()) {
        
        $DAL = $this->slimApp->getDALManager()->get('actProcessConfirmPDO');
        $resultSet = $DAL->fillGrid($params);  
        return $resultSet['resultSet'];
    }
    
    /**
     * Function to get datagrid row count on user interface layer
     * @param array $params
     * @return array
     */
    public function fillGridRowTotalCount($params = array()) {
        $DAL = $this->slimApp->getDALManager()->get('actProcessConfirmPDO');
        $resultSet = $DAL->fillGridRowTotalCount($params);  
        return $resultSet['resultSet'];
    }
  
      /**
     * Function to fill datagrid on user interface layer
     * @param array | null $params
     * @return array
     */
    public function getConsultantJobs ($params = array()) {        
        $DAL = $this->slimApp->getDALManager()->get('actProcessConfirmPDO');
        $resultSet = $DAL->getConsultantJobs($params);  
        return $resultSet['resultSet'];
    }
    
    /**
     * Function to get datagrid row count on user interface layer
     * @param array $params
     * @return array
     */
    public function getConsultantJobsRtc($params = array()) {
        $DAL = $this->slimApp->getDALManager()->get('actProcessConfirmPDO');
        $resultSet = $DAL->getConsultantJobsRtc($params);  
        return $resultSet['resultSet'];
    }
    
 
  
}

