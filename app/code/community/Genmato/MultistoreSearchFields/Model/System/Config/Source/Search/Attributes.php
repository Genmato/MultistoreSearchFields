<?php

class Genmato_MultistoreSearchFields_Model_System_Config_Source_Search_Attributes
{

    public function toOptionArray()
    {
        $fields = array();

        $collection = Mage::getResourceModel('catalog/product_attribute_collection')
            ->addFilter('is_visible_in_advanced_search', 1);

        foreach ($collection as $attr) {
            $fields[] = array(
                'label' => $attr->getFrontendLabel(),
                'value' => $attr->getId()
            );
        }

        return $fields;
    }
}