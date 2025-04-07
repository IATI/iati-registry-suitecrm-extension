<?php

$dictionary["iati_org_actions_changed_org"] = array(
  'true_relationship_type' => 'one-to-many',
  'relationships' =>
  array(
    'iati_org_actions_changed_org' =>
    array(
      'lhs_module' => 'Accounts',
      'lhs_table' => 'accounts',
      'lhs_key' => 'id',
      'rhs_module' => 'IATI_Organisation_Actions',
      'rhs_table' => 'iati_org_actions',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'iati_org_actions_changed_org_c',
      'join_key_lhs' => 'iati_org_actions_changed_orgaccounts_ida',
      'join_key_rhs' => 'iati_org_actions_changed_orgiati_org_actions_idb',
    ),
  ),
  'table' => 'iati_org_actions_changed_org_c',
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
      'name' => 'iati_org_actions_changed_orgaccounts_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 =>
    array(
      'name' => 'iati_org_actions_changed_orgiati_org_actions_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' =>
  array(
    0 =>
    array(
      'name' => 'iati_org_actions_changed_orgspk',
      'type' => 'primary',
      'fields' =>
      array(
        0 => 'id',
      ),
    ),
    1 =>
    array(
      'name' => 'iati_org_actions_changed_org_ida1',
      'type' => 'index',
      'fields' =>
      array(
        0 => 'iati_org_actions_changed_orgaccounts_ida',
      ),
    ),
    2 =>
    array(
      'name' => 'iati_org_actions_changed_org_alt',
      'type' => 'alternate_key',
      'fields' =>
      array(
        0 => 'iati_org_actions_changed_orgiati_org_actions_idb',
      ),
    ),
  ),
);
