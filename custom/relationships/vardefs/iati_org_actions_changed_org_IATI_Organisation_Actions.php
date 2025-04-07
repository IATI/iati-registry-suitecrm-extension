<?php

$dictionary["IATI_Organisation_Actions"]["fields"]["iati_org_actions_changed_org"] = array(
  'name' => 'iati_org_actions_changed_org',
  'type' => 'link',
  'relationship' => 'iati_org_actions_changed_org',
  'source' => 'non-db',
  'module' => 'Accounts',
  'bean_name' => 'Account',
  'vname' => 'LBL_IATI_ORGANISATION_ACTIONS_CHANGED_ORG_FROM_ACCOUNTS_TITLE',
  'id_name' => 'iati_org_actions_changed_orgaccounts_ida',
);
$dictionary["IATI_Organisation_Actions"]["fields"]["iati_org_actions_changed_org_name"] = array(
  'name' => 'iati_org_actions_changed_org_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_IATI_ORGANISATION_ACTIONS_CHANGED_ORG_FROM_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'iati_org_actions_changed_orgaccounts_ida',
  'link' => 'iati_org_actions_changed_org',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
$dictionary["IATI_Organisation_Actions"]["fields"]["iati_org_actions_changed_orgaccounts_ida"] = array(
  'name' => 'iati_org_actions_changed_orgaccounts_ida',
  'type' => 'link',
  'relationship' => 'iati_org_actions_changed_org',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_IATI_ORGANISATION_ACTIONS_CHANGED_ORG_FROM_IATI_ORGANISATION_ACTIONS_TITLE',
);
