<?php

$dictionary["IATI_Datasets"]["fields"]["iati_datasets_owner_org"] = array(
  'name' => 'iati_datasets_owner_org',
  'type' => 'link',
  'relationship' => 'iati_datasets_owner_org',
  'source' => 'non-db',
  'module' => 'Accounts',
  'bean_name' => 'Account',
  'vname' => 'LBL_IATI_DATASETS_OWNER_ORG_FROM_ACCOUNTS_TITLE',
  'id_name' => 'iati_datasets_accountsaccounts_ida',
);
$dictionary["IATI_Datasets"]["fields"]["iati_datasets_owner_org_name"] = array(
  'name' => 'iati_datasets_owner_org_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_IATI_DATASETS_OWNER_ORG_FROM_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'iati_datasets_owner_orgaccounts_ida',
  'link' => 'iati_datasets_owner_org',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
$dictionary["IATI_Datasets"]["fields"]["iati_datasets_owner_orgaccounts_ida"] = array(
  'name' => 'iati_datasets_owner_orgaccounts_ida',
  'type' => 'link',
  'relationship' => 'iati_datasets_owner_org',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_IATI_DATASETS_OWNER_ORG_FROM_ACCOUNTS_TITLE',
);
