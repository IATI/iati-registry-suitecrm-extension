<?php

$dictionary["iati_datasets_creator_person"] = array(
  'true_relationship_type' => 'one-to-many',
  'relationships' =>
  array(
    'iati_datasets_creator_person' =>
    array(
      'lhs_module' => 'Contacts',
      'lhs_table' => 'contacts',
      'lhs_key' => 'id',
      'rhs_module' => 'IATI_Datasets',
      'rhs_table' => 'iati_datasets',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'iati_datasets_creator_person_c',
      'join_key_lhs' => 'iati_datasets_creator_personcontacts_ida',
      'join_key_rhs' => 'iati_datasets_creator_personiati_datasets_idb',
    ),
  ),
  'table' => 'iati_datasets_creator_person_c',
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
      'name' => 'iati_datasets_creator_personcontacts_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 =>
    array(
      'name' => 'iati_datasets_creator_personiati_datasets_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' =>
  array(
    0 =>
    array(
      'name' => 'iati_datasets_creator_personspk',
      'type' => 'primary',
      'fields' =>
      array(
        0 => 'id',
      ),
    ),
    1 =>
    array(
      'name' => 'iati_datasets_creator_person_ida1',
      'type' => 'index',
      'fields' =>
      array(
        0 => 'iati_datasets_creator_personcontacts_ida',
      ),
    ),
    2 =>
    array(
      'name' => 'iati_datasets_creator_person_alt',
      'type' => 'alternate_key',
      'fields' =>
      array(
        0 => 'iati_datasets_creator_personiati_datasets_idb',
      ),
    ),
  ),
);
