<?php

$module_name = 'IATI_Datasets';
$listViewDefs [$module_name] =
array(
  'NAME' =>
  array(
    'type' => 'name',
    'link' => true,
    'label' => 'LBL_NAME',
    'width' => '10%',
    'default' => true,
  ),
  'IATI_SHORT_NAME' =>
  array(
    'type' => 'varchar',
    'label' => 'LBL_IATI_SHORT_NAME',
    'width' => '10%',
    'default' => true,
  ),
  'IATI_DATASETS_OWNER_ORG_NAME' =>
  array(
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_IATI_DATASETS_OWNER_ORG_FROM_ACCOUNTS_TITLE',
    'id' => 'IATI_DATASETS_OWNER_ORGACCOUNTS_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'IATI_LICENCE_ID' =>
  array(
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_IATI_LICENCE_ID',
    'width' => '10%',
    'default' => true,
  ),
  'IATI_METADATA_UPDATE_DATE' =>
  array(
    'type' => 'datetimecombo',
    'label' => 'LBL_IATI_METADATA_UPDATE_DATE',
    'width' => '10%',
    'default' => true,
  ),
  'IATI_URL_UPDATE_DATE' =>
  array(
    'type' => 'datetimecombo',
    'label' => 'LBL_IATI_URL_UPDATE_DATE',
    'width' => '10%',
    'default' => true,
  ),
  'IATI_DATASET_URL' =>
  array(
    'type' => 'url',
    'label' => 'LBL_IATI_DATASET_URL',
    'width' => '10%',
    'default' => true,
  ),
);
;
