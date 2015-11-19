<?php
/**
* 
*/
// class PM_Popupbasic_Model_Config_Source_Static 
// {
// 	protected $_options;

//     public function toOptionArray()
//     {
//         if (!$this->_options) 
//         {
//             $this->_options = Mage::getResourceModel('cms/block_collection')
//                 ->load()
//                 ->toOptionArray();
//         }
//         return $this->_options;
//     }
	
// }
class PM_Popupbasic_Model_Config_Source_Static
{
	 protected $_options;

    public function toOptionArray()
    {
        if (!$this->_options) {
            $this->_options = Mage::getResourceModel('cms/block_collection')
                ->load()
                ->toOptionArray();
        }
        return $this->_options;
    }
}
?>