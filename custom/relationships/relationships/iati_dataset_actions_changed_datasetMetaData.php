<?php

$dictionary["iati_dataset_actions_changed_dataset"] = array(
  'true_relationship_type' => 'one-to-many',
  'relationships' =>
  array(
    'iati_dataset_actions_changed_dataset' =>
    array(
      'lhs_module' => 'IATI_Datasets',
      'lhs_table' => 'iati_datasets',
      'lhs_key' => 'id',
      'rhs_module' => 'IATI_Dataset_Actions',
      'rhs_table' => 'iati_dataset_actions',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'iati_dataset_actions_changed_dataset_c',
      'join_key_lhs' => 'iati_dataset_actions_changed_datasetiati_datasets_ida',
      'join_key_rhs' => 'iati_dataset_actions_changed_datasetiati_dataset_actions_idb',
    ),
  ),
  'table' => 'iati_dataset_actions_changed_dataset_c',
  'fields' =>
  array(
    0 =>
    array(
      'name' => 'id',
      'type' => 'varchar',
      'len' => 36,
    ),
    1 =>
    array(
      'name' => 'date_modified',
      'type' => 'datetime',
    ),
    2 =>
    array(
      'name' => 'deleted',
      'type' => 'bool',
      'len' => '1',
      'default' => '0',
      'required' => true,
    ),
    3 =>
    array(
      'name' => 'iati_dataset_actions_changed_datasetiati_datasets_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 =>
    array(
      'name' => 'iati_dataset_actions_changed_datasetiati_dataset_actions_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' =>
  array(
    0 =>
    array(
      'name' => 'iati_dataset_actions_changed_datasetspk',
      'type' => 'primary',
      'fields' =>
      array(
        0 => 'id',
      ),
    ),
    1 =>
    array(
      'name' => 'iati_dataset_actions_changed_dataset_ida1',
      'type' => 'index',
      'fields' =>
      array(
        0 => 'iati_dataset_actions_changed_datasetiati_datasets_ida',
      ),
    ),
    2 =>
    array(
      'name' => 'iati_dataset_actions_changed_dataset_alt',
      'type' => 'alternate_key',
      'fields' =>
      array(
        0 => 'iati_dataset_actions_changed_datasetiati_dataset_actions_idb',
      ),
    ),
  ),
);
