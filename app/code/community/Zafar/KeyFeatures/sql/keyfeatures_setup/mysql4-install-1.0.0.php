<?php
$installer = $this;
$installer->startSetup();
$connection = $installer->getConnection();
$connection->addColumn($installer->getTable('catalog_eav_attribute'), 'position_in_key_features', "int(11) DEFAULT NULL");
$connection->addColumn($installer->getTable('catalog_eav_attribute'), 'use_in_key_features', "tinyint(1) DEFAULT NULL");
$installer->endSetup();