<?php

class Genmato_MultistoreSearchFields_Block_Advanced_Form extends Mage_CatalogSearch_Block_Advanced_Form
{

    public function getSearchableAttributes()
    {
        $fields = trim(Mage::getStoreConfig('genmato_multistoresearchfields/config/attributes'));

        $searchAttr = parent::getSearchableAttributes();

        if ($fields == "") {
            return $searchAttr;
        }

        $attrFields = explode(',', $fields);

        $attributes = array();
        foreach ($searchAttr as $attribute) {
            if (in_array($attribute->getId(), $attrFields)) {
                $attributes[] = $attribute;
            }
        }

        return $attributes;
    }
}