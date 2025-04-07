<?php

$layout_defs["Accounts"]["subpanel_setup"]['iati_org_actions_changed_org'] = array(
  'order' => 100,
  'module' => 'IATI_Organisation_Actions',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_IATI_ORGANISATION_ACTIONS_CHANGED_ORG_FROM_IATI_ORGANISATION_ACTIONS_TITLE',
  'get_subpanel_data' => 'iati_org_actions_changed_org',
  'top_buttons' =>
  array(
    0 =>
    array(
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
    1 =>
    array(
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);
