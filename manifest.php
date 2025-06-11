<?php

$manifest = array(
  0 =>
  array(
    'acceptable_sugar_versions' =>
    array(
      0 => '6.5.25',
    ),
  ),
  1 =>
  array(
    'acceptable_sugar_flavors' =>
    array(
      0 => 'CE',
    ),
  ),
  'readme' => '',
  'key' => 'IATI',
  'author' => 'IATI Secretariat',
  'description' => 'This extension implements the IATI Registry and additional CRM functionality within SuiteCRM.',
  'icon' => '',
  'is_uninstallable' => true,
  'name' => 'IATI_Registry',
  'published_date' => '2025-05-28',
  'type' => 'module',
  'version' => '0.3.0',
  'remove_tables' => 'prompt',
  'copy_files' => array(
  )
);


/*
** Custom fields for the People (Contacts) module - pulled out here as a separate array
** for readability.
*/
$contacts_custom_fields = array(
  array(
    'name' => 'iati_ckan_id_c',
    'label' => 'LBL_IATI_CKAN_ID',
    'type' => 'varchar',
    'module' => 'Contacts',
    'help' => 'UUID for this record in the CKAN Registry',
    'comment' => '',
    'default_value' => '',
    'max_size' => 48,
    'mass_update' => true,
    'required' => false,
    'reportable' => false,
    'audited' => false,
    'importable' => true,
    'duplicate_merge' => false,
    'inline_edit' => false,
    'studio' => true,
  ),
  array(
    'name' => 'iati_country_c',
    'label' => 'LBL_IATI_COUNTRY',
    'type' => 'enum',
    'module' => 'Contacts',
    'help' => 'What country this person is located in',
    'comment' => '',
    'ext1' => 'iati_country_dom',
    'default_value' => '',
    'mass_update' => false,
    'required' => false,
    'reportable' => true,
    'audited' => false,
    'importable' => true,
    'duplicate_merge' => false,
    'inline_edit' => false,
    'studio' => true,
  ),
  array(
    'name' => 'iati_inperson_name_c',
    'label' => 'LBL_IATI_INPERSON_NAME',
    'type' => 'varchar',
    'module' => 'Contacts',
    'help' => 'How this person wants to be referred to during in-person interactions',
    'comment' => '',
    'default_value' => '',
    'max_size' => 256,
    'mass_update' => false,
    'required' => false,
    'reportable' => false,
    'audited' => false,
    'importable' => true,
    'duplicate_merge' => false,
    'inline_edit' => false,
    'studio' => true,
  ),
  array(
    'name' => 'iati_mailing_list_subscriber_c',
    'label' => 'LBL_IATI_MAILING_LIST_SUBSCRIBER',
    'type' => 'bool',
    'module' => 'Contacts',
    'help' => 'Whether or not this person is subscribed to the mailing list',
    'comment' => '',
    'default_value' => false,
    'mass_update' => false,
    'required' => false,
    'reportable' => true,
    'audited' => false,
    'importable' => true,
    'duplicate_merge' => false,
    'inline_edit' => false,
    'studio' => true,
  ),
  array(
    'name' => 'iati_online_name_c',
    'label' => 'LBL_IATI_ONLINE_NAME',
    'type' => 'varchar',
    'module' => 'Contacts',
    'help' => 'How this person wants to be referred to during online interactions',
    'comment' => '',
    'default_value' => '',
    'max_size' => 256,
    'mass_update' => false,
    'required' => false,
    'reportable' => false,
    'audited' => false,
    'importable' => true,
    'duplicate_merge' => false,
    'inline_edit' => false,
    'studio' => true,
  ),
  array(
    'name' => 'iati_preferred_language_c',
    'label' => 'LBL_IATI_PREFERRED_LANGUAGE',
    'type' => 'varchar',
    'module' => 'Contacts',
    'help' => 'The language which this person prefers to use',
    'comment' => '',
    'default_value' => '',
    'max_size' => 16,
    'mass_update' => false,
    'required' => false,
    'reportable' => true,
    'audited' => false,
    'importable' => true,
    'duplicate_merge' => false,
    'inline_edit' => false,
    'studio' => true,
  ),
  array(
    'name' => 'iati_timezone_c',
    'label' => 'LBL_IATI_TIMEZONE',
    'type' => 'enum',
    'module' => 'Contacts',
    'help' => 'What timezone this person is located in',
    'comment' => '',
    'ext1' => 'iati_timezone_dom',
    'default_value' => '',
    'mass_update' => false,
    'required' => false,
    'reportable' => true,
    'audited' => false,
    'importable' => true,
    'duplicate_merge' => false,
    'inline_edit' => false,
    'studio' => true,
  ),
  array(
    'name' => 'iati_identityservice_id_c',
    'label' => 'LBL_IATI_IDENTITYSERVICE_ID',
    'type' => 'varchar',
    'module' => 'Contacts',
    'help' => 'UUID for this record in the identity Service',
    'comment' => '',
    'default_value' => '',
    'max_size' => 48,
    'mass_update' => true,
    'required' => false,
    'reportable' => false,
    'audited' => false,
    'importable' => true,
    'duplicate_merge' => false,
    'inline_edit' => false,
    'studio' => true,
  ),
);


/*
** Custom fields for the Organisations (Accounts) module - pulled out here as a separate array
** for readability.
*/
$accounts_custom_fields = array(
  array(
    'name' => 'iati_ckan_id_c',
    'label' => 'LBL_IATI_CKAN_ID',
    'type' => 'varchar',
    'module' => 'Accounts',
    'help' => 'UUID for this record in the CKAN Registry',
    'comment' => '',
    'default_value' => '',
    'max_size' => 48,
    'mass_update' => true,
    'enable_range_search' => false,
    'required' => false,
    'reportable' => false,
    'audited' => false,
    'importable' => true,
    'duplicate_merge' => false,
    'inline_edit' => false,
    'studio' => true,
  ),
  array(
    'name' => 'iati_num_published_datasets_c',
    'label' => 'LBL_IATI_NUM_PUBLISHED_DATASETS',
    'type' => 'int',
    'default_value' => 0,
    'len' => 4,
    'module' => 'Accounts',
    'help' => 'Number of published datasets',
    'comment' => '',
    'default_value' => '',
    'enable_range_search' => true,
    'required' => false,
    'reportable' => false,
    'audited' => false,
    'importable' => true,
    'duplicate_merge' => false,
    'inline_edit' => false,
    'studio' => true,
  ),
  array(
    'name' => 'iati_dataportal_url_c',
    'label' => 'LBL_IATI_DATAPORTAL_URL',
    'type' => 'url',
    'module' => 'Accounts',
    'help' => 'URL for the reporting organisation\'s own data portal',
    'comment' => '',
    'default_value' => '',
    'mass_update' => true,
    'enable_range_search' => false,
    'required' => false,
    'reportable' => false,
    'audited' => false,
    'importable' => true,
    'duplicate_merge' => false,
    'inline_edit' => true,
    'studio' => true,
  ),
  array(
    'name' => 'iati_default_licence_id_c',
    'label' => 'LBL_IATI_DEFAULT_LICENCE_ID',
    'type' => 'enum',
    'module' => 'Accounts',
    'help' => 'Default publishing licence for this reporting organisation',
    'comment' => '',
    'ext1' => 'iati_licence_dom',
    'default_value' => '',
    'mass_update' => true,
    'required' => false,
    'reportable' => true,
    'audited' => false,
    'importable' => true,
    'duplicate_merge' => false,
    'inline_edit' => true,
    'studio' => true,
  ),
  array(
    'name' => 'iati_exclusions_policy_url_c',
    'label' => 'LBL_IATI_EXCLUSIONS_POLICY_URL',
    'type' => 'url',
    'module' => 'Accounts',
    'help' => 'URL for the reporting organisation\'s exclusions and constraints policy',
    'comment' => '',
    'default_value' => '',
    'mass_update' => true,
    'enable_range_search' => false,
    'required' => false,
    'reportable' => false,
    'audited' => false,
    'importable' => true,
    'duplicate_merge' => false,
    'inline_edit' => true,
    'studio' => true,
  ),
  array(
    'name' => 'iati_first_publish_date_c',
    'label' => 'LBL_IATI_FIRST_PUBLISH_DATE',
    'type' => 'datetime',
    'module' => 'Accounts',
    'help' => 'Date that the reporting organisation first published in IATI',
    'comment' => '',
    'default_value' => '',
    'mass_update' => false,
    'enable_range_search' => true,
    'required' => false,
    'reportable' => true,
    'audited' => true,
    'importable' => true,
    'duplicate_merge' => false,
    'inline_edit' => false,
    'studio' => true,
  ),
  array(
    'name' => 'iati_hq_country_c',
    'label' => 'LBL_IATI_HQ_COUNTRY',
    'type' => 'enum',
    'module' => 'Accounts',
    'help' => 'HQ country for this organisation',
    'comment' => '',
    'ext1' => 'iati_country_dom',
    'default_value' => '',
    'mass_update' => true,
    'required' => false,
    'reportable' => true,
    'audited' => true,
    'importable' => true,
    'duplicate_merge' => false,
    'inline_edit' => true,
    'studio' => true,
  ),
  array(
    'name' => 'iati_region_c',
    'label' => 'LBL_IATI_REGION',
    'type' => 'enum',
    'module' => 'Accounts',
    'help' => 'Region for this organisation',
    'comment' => '',
    'ext1' => 'iati_region_dom',
    'default_value' => '',
    'mass_update' => true,
    'required' => false,
    'reportable' => true,
    'audited' => true,
    'importable' => true,
    'duplicate_merge' => false,
    'inline_edit' => true,
    'studio' => true,
  ),
  array(
    'name' => 'iati_identifier_c',
    'label' => 'LBL_IATI_IDENTIFIER',
    'type' => 'varchar',
    'module' => 'Accounts',
    'help' => 'org-id.guide ID for this organisation',
    'comment' => '',
    'default_value' => '',
    'max_size' => 32,
    'mass_update' => true,
    'required' => false,
    'reportable' => true,
    'audited' => true,
    'importable' => true,
    'duplicate_merge' => false,
    'inline_edit' => true,
    'studio' => true,
  ),
  array(
    'name' => 'iati_org_type_c',
    'label' => 'LBL_IATI_ORG_TYPE',
    'type' => 'enum',
    'module' => 'Accounts',
    'help' => 'Type of organisation following the IATI organisation type codelist',
    'comment' => '',
    'ext1' => 'iati_org_type_dom',
    'default_value' => '',
    'mass_update' => true,
    'required' => false,
    'reportable' => true,
    'audited' => true,
    'importable' => true,
    'duplicate_merge' => false,
    'inline_edit' => true,
    'studio' => true,
  ),
  array(
    'name' => 'iati_reporting_source_type_c',
    'label' => 'LBL_IATI_REPORTING_SOURCE_TYPE',
    'type' => 'enum',
    'module' => 'Accounts',
    'help' => 'Source type for reporting by this organisation',
    'comment' => '',
    'ext1' => 'iati_reporting_source_type_dom',
    'default_value' => '',
    'mass_update' => true,
    'required' => false,
    'reportable' => true,
    'audited' => true,
    'importable' => true,
    'duplicate_merge' => false,
    'inline_edit' => true,
    'studio' => true,
  ),
  array(
    'name' => 'iati_registry_approved_c',
    'label' => 'LBL_IATI_REGISTRY_APPROVED',
    'type' => 'bool',
    'module' => 'Accounts',
    'help' => 'Whether or not this organisation is approved to publish into the registry as a Reporting Organisation',
    'comment' => '',
    'default_value' => false,
    'mass_update' => false,
    'required' => false,
    'reportable' => true,
    'audited' => true,
    'importable' => true,
    'duplicate_merge' => false,
    'inline_edit' => false,
    'studio' => true,
  ),
);


$installdefs = array(
  'id' => 'IATI_Registry',

  /*
  ** Copy custom language strings into their relevant places.
  */
  'language' => array(
    // application level language strings, including dropdown lists - this file is autogenerated.
    array(
      'from' => '<basepath>/custom/application/language/_override_en_us.IATI.php',
      'to_module' => 'application',
      'language' => 'en_us',
    ),

    // language strings for Organisations: (renaming from Accounts) and custom fields
    array(
      'from' => '<basepath>/custom/modules/Accounts/Ext/Language/_override_en_us.IATI.php',
      'to_module' => 'Accounts',
      'language' => 'en_us'
    ),

    // language strings for People: (renaming from Contacts) and custom fields
    array(
      'from' => '<basepath>/custom/modules/Contacts/Ext/Language/_override_en_us.IATI.php',
      'to_module' => 'Contacts',
      'language' => 'en_us'
    ),

    // language strings for custom registry modules
    array(
      'from' => '<basepath>/custom/modules/IATI_Dataset_Actions/language/en_us.lang.php',
      'to_module' => 'IATI_Dataset_Actions',
      'language' => 'en_us',
    ),
    array(
      'from' => '<basepath>/custom/modules/IATI_Datasets/language/en_us.lang.php',
      'to_module' => 'IATI_Datasets',
      'language' => 'en_us',
    ),
    array(
      'from' => '<basepath>/custom/modules/IATI_Organisation_Actions/language/en_us.lang.php',
      'to_module' => 'IATI_Organisation_Actions',
      'language' => 'en_us',
    ),

    // miscellaneous language strings for renaming of Organisations and People from Accounts and Contacts
    // other language strings for Accounts and Contacts renaming
    array(
      'from' => '<basepath>/custom/modules/AM_ProjectTemplates/Ext/Language/_override_en_us.IATI.php',
      'to_module' => 'AM_ProjectTemplates',
      'language' => 'en_us'
    ),
    array(
      'from' => '<basepath>/custom/modules/AOS_Contracts/Ext/Language/_override_en_us.IATI.php',
      'to_module' => 'AOS_Contracts',
      'language' => 'en_us'
    ),
    array(
      'from' => '<basepath>/custom/modules/AOS_Invoices/Ext/Language/_override_en_us.IATI.php',
      'to_module' => 'AOS_Invoices',
      'language' => 'en_us'
    ),
    array(
      'from' => '<basepath>/custom/modules/AOS_Products/Ext/Language/_override_en_us.IATI.php',
      'to_module' => 'AOS_Products',
      'language' => 'en_us'
    ),
    array(
      'from' => '<basepath>/custom/modules/AOS_Quotes/Ext/Language/_override_en_us.IATI.php',
      'to_module' => 'AOS_Quotes',
      'language' => 'en_us'
    ),
    array(
      'from' => '<basepath>/custom/modules/Bugs/Ext/Language/_override_en_us.IATI.php',
      'to_module' => 'Bugs',
      'language' => 'en_us'
    ),
    array(
      'from' => '<basepath>/custom/modules/Calls/Ext/Language/_override_en_us.IATI.php',
      'to_module' => 'Calls',
      'language' => 'en_us'
    ),
    array(
      'from' => '<basepath>/custom/modules/Campaigns/Ext/Language/_override_en_us.IATI.php',
      'to_module' => 'Campaigns',
      'language' => 'en_us'
    ),
    array(
      'from' => '<basepath>/custom/modules/Cases/Ext/Language/_override_en_us.IATI.php',
      'to_module' => 'Cases',
      'language' => 'en_us'
    ),
    array(
      'from' => '<basepath>/custom/modules/Documents/Ext/Language/_override_en_us.IATI.php',
      'to_module' => 'Documents',
      'language' => 'en_us'
    ),
    array(
      'from' => '<basepath>/custom/modules/Emails/Ext/Language/_override_en_us.IATI.php',
      'to_module' => 'Emails',
      'language' => 'en_us'
    ),
    array(
      'from' => '<basepath>/custom/modules/Employees/Ext/Language/_override_en_us.IATI.php',
      'to_module' => 'Employees',
      'language' => 'en_us'
    ),
    array(
      'from' => '<basepath>/custom/modules/FP_events/Ext/Language/_override_en_us.IATI.php',
      'to_module' => 'FP_events',
      'language' => 'en_us'
    ),
    array(
      'from' => '<basepath>/custom/modules/Leads/Ext/Language/_override_en_us.IATI.php',
      'to_module' => 'Leads',
      'language' => 'en_us'
    ),
    array(
      'from' => '<basepath>/custom/modules/Meetings/Ext/Language/_override_en_us.IATI.php',
      'to_module' => 'Meetings',
      'language' => 'en_us'
    ),
    array(
      'from' => '<basepath>/custom/modules/Notes/Ext/Language/_override_en_us.IATI.php',
      'to_module' => 'Notes',
      'language' => 'en_us'
    ),
    array(
      'from' => '<basepath>/custom/modules/Opportunities/Ext/Language/_override_en_us.IATI.php',
      'to_module' => 'Opportunities',
      'language' => 'en_us'
    ),
    array(
      'from' => '<basepath>/custom/modules/Project/Ext/Language/_override_en_us.IATI.php',
      'to_module' => 'Project',
      'language' => 'en_us'
    ),
    array(
      'from' => '<basepath>/custom/modules/ProspectLists/Ext/Language/_override_en_us.IATI.php',
      'to_module' => 'ProspectLists',
      'language' => 'en_us'
    ),
    array(
      'from' => '<basepath>/custom/modules/SurveyResponses/Ext/Language/_override_en_us.IATI.php',
      'to_module' => 'SurveyResponses',
      'language' => 'en_us'
    ),
    array(
      'from' => '<basepath>/custom/modules/Tasks/Ext/Language/_override_en_us.IATI.php',
      'to_module' => 'Tasks',
      'language' => 'en_us'
    ),
    array(
      'from' => '<basepath>/custom/modules/Users/Ext/Language/_override_en_us.IATI.php',
      'to_module' => 'Users',
      'language' => 'en_us'
    ),
    array(
      'from' => '<basepath>/custom/modules/jjwg_Maps/Ext/Language/_override_en_us.IATI.php',
      'to_module' => 'jjwg_Maps',
      'language' => 'en_us'
    ),

  ),

  /*
  ** Setup custom fields.
  */
  'custom_fields' => array_merge($accounts_custom_fields, $contacts_custom_fields),


  /*
  ** Setup the custom registry modules to store IATI datasets and datasets/org actions.
  */
  'beans' => array(
    array(
      'module' => 'IATI_Datasets',
      'class' => 'IATI_Datasets',
      'path' => 'modules/IATI_Datasets/IATI_Datasets.php',
      'tab' => true,
    ),
    array(
      'module' => 'IATI_Dataset_Actions',
      'class' => 'IATI_Dataset_Actions',
      'path' => 'modules/IATI_Dataset_Actions/IATI_Dataset_Actions.php',
      'tab' => true,
    ),
    array(
      'module' => 'IATI_Organisation_Actions',
      'class' => 'IATI_Organisation_Actions',
      'path' => 'modules/IATI_Organisation_Actions/IATI_Organisation_Actions.php',
      'tab' => true,
    ),
  ),

  /*
  ** Setup custom logic hooks
  */
  'logic_hooks' => array(
    array(
      'module' => 'IATI_Datasets',
      'hook' => 'process_record',
      'order' => 77,
      'description' => 'Add IATI Tool buttons to dataset list/subpanel view',
      'file' => 'modules/IATI_Datasets/ToolButtonsHook.php',
      'class' => 'ToolButtonsHook',
      'function' => 'addButtons',
    ),
  ),

  /*
  ** Layouts and variable definitions for the custom IATI modules.
  */
  'layoutdefs' => array(
    array(
      'from' => '<basepath>/custom/relationships/layoutdefs/accounts_contacts_Contacts.php',
      'to_module' => 'Contacts',
    ),
    array(
      'from' => '<basepath>/custom/relationships/layoutdefs/iati_datasets_contacts_Contacts.php',
      'to_module' => 'Contacts',
    ),
    array(
      'from' => '<basepath>/custom/relationships/layoutdefs/iati_datasets_accounts_Accounts.php',
      'to_module' => 'Accounts',
    ),
    array(
      'from' => '<basepath>/custom/relationships/layoutdefs/iati_org_actions_actor_person_Contacts.php',
      'to_module' => 'Contacts',
    ),
    array(
      'from' => '<basepath>/custom/relationships/layoutdefs/iati_org_actions_changed_org_Accounts.php',
      'to_module' => 'Accounts',
    ),
    array(
      'from' => '<basepath>/custom/relationships/layoutdefs/iati_dataset_actions_actor_person_Contacts.php',
      'to_module' => 'Contacts',
    ),
    array(
      'from' => '<basepath>/custom/relationships/layoutdefs/iati_dataset_actions_changed_dataset_IATI_Datasets.php',
      'to_module' => 'IATI_Datasets',
    ),
  ),

  'relationships' => array(
    array(
      'meta_data' => '<basepath>/custom/relationships/relationships/iati_datasets_accountsMetaData.php',
    ),
    array(
      'meta_data' => '<basepath>/custom/relationships/relationships/iati_datasets_contactsMetaData.php',
    ),
    array(
      'meta_data' => '<basepath>/custom/relationships/relationships/iati_org_actions_changed_orgMetaData.php',
    ),
    array(
      'meta_data' => '<basepath>/custom/relationships/relationships/iati_org_actions_actor_personMetaData.php',
    ),
    array(
      'meta_data' => '<basepath>/custom/relationships/relationships/iati_dataset_actions_changed_datasetMetaData.php',
    ),
    array(
      'meta_data' => '<basepath>/custom/relationships/relationships/iati_dataset_actions_actor_personMetaData.php',
    ),
    array(
      'meta_data' => '<basepath>/custom/relationships/relationships/iati_dataset_actions_owner_orgMetaData.php',
    ),
  ),

  'vardefs' => array(
    array(
      'from' => '<basepath>/custom/modules/Accounts/Ext/Vardefs/iati_short_name.php',
      'to_module' => 'Accounts',
    ),
    array(
      'from' => '<basepath>/custom/relationships/vardefs/iati_datasets_accounts_IATI_Datasets.php',
      'to_module' => 'IATI_Datasets',
    ),
    array(
      'from' => '<basepath>/custom/relationships/vardefs/iati_datasets_accounts_Accounts.php',
      'to_module' => 'Accounts',
    ),
    array(
      'from' => '<basepath>/custom/relationships/vardefs/iati_datasets_contacts_IATI_Datasets.php',
      'to_module' => 'IATI_Datasets',
    ),
    array(
      'from' => '<basepath>/custom/relationships/vardefs/iati_datasets_contacts_Contacts.php',
      'to_module' => 'Contacts',
    ),
    array(
      'from' => '<basepath>/custom/relationships/vardefs/iati_org_actions_changed_org_Accounts.php',
      'to_module' => 'Accounts',
    ),
    array(
      'from' => '<basepath>/custom/relationships/vardefs/iati_org_actions_changed_org_IATI_Organisation_Actions.php',
      'to_module' => 'IATI_Organisation_Actions',
    ),
    array(
      'from' => '<basepath>/custom/relationships/vardefs/iati_org_actions_actor_person_Contacts.php',
      'to_module' => 'Contacts',
    ),
    array(
      'from' => '<basepath>/custom/relationships/vardefs/iati_org_actions_actor_person_IATI_Organisation_Actions.php',
      'to_module' => 'IATI_Organisation_Actions',
    ),
    array(
      'from' => '<basepath>/custom/relationships/vardefs/iati_dataset_actions_changed_dataset_IATI_Dataset_Actions.php',
      'to_module' => 'IATI_Dataset_Actions'
    ),
    array(
      'from' => '<basepath>/custom/relationships/vardefs/iati_dataset_actions_changed_dataset_IATI_Datasets.php',
      'to_module' => 'IATI_Datasets'
    ),
    array(
      'from' => '<basepath>/custom/relationships/vardefs/iati_dataset_actions_actor_person_Contacts.php',
      'to_module' => 'Contacts'
    ),
    array(
      'from' => '<basepath>/custom/relationships/vardefs/iati_dataset_actions_actor_person_IATI_Dataset_Actions.php',
      'to_module' => 'IATI_Dataset_Actions'
    ),
    array(
      'from' => '<basepath>/custom/relationships/vardefs/iati_dataset_actions_owner_org_Accounts.php',
      'to_module' => 'Accounts'
    ),
    array(
      'from' => '<basepath>/custom/relationships/vardefs/iati_dataset_actions_owner_org_IATI_Dataset_Actions.php',
      'to_module' => 'IATI_Dataset_Actions'
    ),
  ),

  /*
  ** General copy operations.
  */
  'copy' => array(
    // copy custom modules
    array(
      'from' => '<basepath>/custom/modules/IATI_Datasets',
      'to' => 'modules/IATI_Datasets',
    ),
    array(
      'from' => '<basepath>/custom/modules/IATI_Dataset_Actions',
      'to' => 'modules/IATI_Dataset_Actions',
    ),
    array(
      'from' => '<basepath>/custom/modules/IATI_Organisation_Actions',
      'to' => 'modules/IATI_Organisation_Actions',
    ),

    // copy customised views for Accounts and Contacts
    array(
      'from' => '<basepath>/custom/modules/Accounts/metadata/listviewdefs.php',
      'to' => 'custom/modules/Accounts/metadata/listviewdefs.php',
    ),
    array(
      'from' => '<basepath>/custom/modules/Accounts/metadata/editviewdefs.php',
      'to' => 'custom/modules/Accounts/metadata/editviewdefs.php',
    ),
    array(
      'from' => '<basepath>/custom/modules/Accounts/metadata/detailviewdefs.php',
      'to' => 'custom/modules/Accounts/metadata/detailviewdefs.php',
    ),
    array(
      'from' => '<basepath>/custom/modules/Contacts/metadata/listviewdefs.php',
      'to' => 'custom/modules/Contacts/metadata/listviewdefs.php',
    ),
    array(
      'from' => '<basepath>/custom/modules/Contacts/metadata/editviewdefs.php',
      'to' => 'custom/modules/Contacts/metadata/editviewdefs.php',
    ),
    array(
      'from' => '<basepath>/custom/modules/Contacts/metadata/detailviewdefs.php',
      'to' => 'custom/modules/Contacts/metadata/detailviewdefs.php',
    ),

    // copy custom styles
    array(
      'from' => '<basepath>/custom/theme/style.css',
      'to' => 'custom/themes/SuiteP/css/Dawn/style.css'
    ),

    // custom menu arrangement
    array(
      'from' => '<basepath>/custom/application/include/tabConfig.php',
      'to' => 'custom/include/tabConfig.php'
    ),
  ),

  'post_uninstall' => array(
  ),
);
