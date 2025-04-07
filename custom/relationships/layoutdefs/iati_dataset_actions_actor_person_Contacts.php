<?php

$layout_defs["Contacts"]["subpanel_setup"]['iati_dataset_actions_actor_person'] = array(
  'order' => 100,
  'module' => 'IATI_Dataset_Actions',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_IATI_DATASET_ACTIONS_ACTOR_PERSON_FROM_IATI_DATASET_ACTIONS_TITLE',
  'get_subpanel_data' => 'iati_dataset_actions_actor_person',
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
