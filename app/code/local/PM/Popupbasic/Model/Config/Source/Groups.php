<?php
/**
* 
*/
class PM_Popupbasic_Model_Config_Source_Groups
{
	
	protected $_groups;
	public function toOptionArray()
	{
		if (!$this->_groups) 
		{
			$this->_groups= Mage::getResourceModel('customer/group_collection')
			->loadData()->toOptionArray();
		}
		return $this->_groups;
	}
}

?>