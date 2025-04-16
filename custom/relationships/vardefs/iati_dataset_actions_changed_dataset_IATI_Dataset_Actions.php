<?php

$dictionary["IATI_Dataset_Actions"]["fields"]["iati_dataset_actions_changed_dataset"] = array(
  'name' => 'iati_dataset_actions_changed_dataset',
  'type' => 'link',
  'relationship' => 'iati_dataset_actions_changed_dataset',
  'source' => 'non-db',
  'module' => 'IATI_Datasets',
  'bean_name' => false,
  'vname' => '',
  'id_name' => 'iati_dataset_actions_changed_datasetiati_datasets_ida',
);
$dictionary["IATI_Dataset_Actions"]["fields"]["iati_dataset_actions_changed_dataset_name"] = array(
  'name' => 'iati_dataset_actions_changed_dataset_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_IATI_DATASET_ACTIONS_CHANGED_DATASET_NAME',
  'save' => true,
  'id_name' => 'iati_dataset_actions_changed_datasetiati_datasets_ida',
  'link' => 'iati_dataset_actions_changed_dataset',
  'table' => 'iati_datasets',
  'module' => 'IATI_Datasets',
  'rname' => 'name',
);
$dictionary["IATI_Dataset_Actions"]["fields"]["iati_dataset_actions_changed_datasetiati_datasets_ida"] = array(
  'name' => 'iati_dataset_actions_changed_datasetiati_datasets_ida',
  'type' => 'link',
  'relationship' => 'iati_dataset_actions_changed_dataset',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_IATI_DATASET_ACTIONS_CHANGED_DATASET_ID',
);
