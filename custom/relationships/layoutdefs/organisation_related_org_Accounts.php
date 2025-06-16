<?php
 // created: 2025-06-10 16:44:11
$layout_defs["Accounts"]["subpanel_setup"]['organisation_related_org'] = array (
  'order' => 100,
  'module' => 'Accounts',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_ORGANISATION_RELATED_ORG_R_TITLE',
  'get_subpanel_data' => 'organisation_related_org',
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
