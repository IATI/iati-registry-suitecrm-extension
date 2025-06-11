<?php

$dictionary["IATI_Dataset_Actions"]["fields"]["iati_dataset_actions_owner_org"] = array(
  'name' => 'iati_dataset_actions_owner_org',
  'type' => 'link',
  'relationship' => 'iati_dataset_actions_owner_org',
  'source' => 'non-db',
  'module' => 'Accounts',
  'bean_name' => 'Account',
  'id_name' => 'owner_org_id',
);
$dictionary["IATI_Dataset_Actions"]["fields"]["owner_org_name"] = array(
  'name' => 'owner_org_name',
  'type' => 'relate',
  'source' => 'non-db',
  'save' => true,
  'id_name' => 'owner_org_id',
  'link' => 'iati_dataset_actions_owner_org',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
$dictionary["IATI_Dataset_Actions"]["fields"]["owner_org_id"] = array(
  'name' => 'owner_org_id',
  'type' => 'link',
  'relationship' => 'iati_dataset_actions_owner_org',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
);
