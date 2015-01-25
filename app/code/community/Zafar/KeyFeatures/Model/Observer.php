<?php
class Zafar_KeyFeatures_Model_Observer
{
  public function addKeyFeturesProperties($observer)
  {
    $fieldset = $observer->getForm()->getElement('front_fieldset');
    $fieldset->addField('use_in_key_features', 'select', array(
        'name' => 'use_in_key_features',
        'values' => array(
                    0 => Mage::helper('core')->__('No'),
                    1 => Mage::helper('core')->__('Yes'),
                  ),
        'label' => Mage::helper('catalog')->__('Use in key features'),
        'title' => Mage::helper('catalog')->__('Use in key features'),
        'note' => Mage::helper('catalog')->__('Valid only for attribute type text,select & multiselect')
    ));
    
    $fieldset->addField('position_in_key_features', 'text', array(
        'name' => 'position_in_key_features',
        'label' => Mage::helper('catalog')->__('Position in key features'),
        'title' => Mage::helper('catalog')->__('Position in key features'),
        'note' => Mage::helper('catalog')->__('Position of attributes in key features')
    ));
  }
}