<?php
/* INSERT IATI PREAMBLE */

/*
** These definitions give us the top navigation menu item names
*/
$app_strings['LBL_TABGROUP_RELATIONSHIPS'] = 'Relationships';
$app_strings['LBL_TABGROUP_REGISTRY_MANAGEMENT'] = 'Registry';

/* These definitions are part of renaming Contacts and Accounts to
   People and Organisations */
$app_list_strings['moduleList']['Contacts']='People';
$app_list_strings['moduleListSingular']['Contacts']='Person';
$app_list_strings['moduleList']['Accounts']='Organisations';
$app_list_strings['moduleListSingular']['Accounts']='Organisation';
$app_list_strings['moduleList']['IATI_Datasets'] = 'IATI Datasets';
$app_list_strings['moduleListSingular']['IATI_Datasets'] = 'IATI Dataset';
$app_list_strings['moduleList']['IATI_Dataset_Actions'] = 'IATI Dataset Actions';
$app_list_strings['moduleListSingular']['IATI_Dataset_Actions'] = 'IATI Dataset Action';
$app_list_strings['moduleList']['IATI_Organisation_Actions'] = 'IATI Organisation Actions';
$app_list_strings['moduleListSingular']['IATI_Organisation_Actions'] = 'IATI Organisation Action';

$app_list_strings['parent_type_display'] = array (
  'Contacts' => 'Person',
);
$app_list_strings['record_type_display'] = array (
  'Contacts' => 'Person',
);
$app_list_strings['record_type_display_notes'] = array (
  'Contacts' => 'Person',
);

/* Dropdowns for Organisation and Dataset actions */
$app_list_strings['iati_org_action_type_dom'] = array (
  'create' => 'Create',
  'update' => 'Update',
  'delete' => 'Delete',
);

$app_list_strings['iati_dataset_action_type_dom'] = array (
  'create' => 'Create',
  'update_metadata' => 'Update metadata',
  'update_url' => 'Update dataset url',
  'republish' => 'Republish',
  'change_visibility' => 'Change visibility',
  'delete' => 'Delete',
);

/* Drop down for Dataset visibility */
$app_list_strings['iati_dataset_visibility_dom'] = array (
  'private' => 'Private',
  'public' => 'Public'
);
