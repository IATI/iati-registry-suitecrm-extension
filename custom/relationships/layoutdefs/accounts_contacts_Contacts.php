<?php
 // created: 2025-06-10 16:46:25
$layout_defs["Contacts"]["subpanel_setup"]['accounts_contacts'] = array (
  'order' => 100,
  'module' => 'Accounts',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'name',
  'title_key' => 'Organisations',
  'get_subpanel_data' => 'accounts',
  'add_subpanel_data' => 'account_id',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);
