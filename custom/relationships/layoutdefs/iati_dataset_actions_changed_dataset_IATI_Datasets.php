<?php

$layout_defs["IATI_Datasets"]["subpanel_setup"]['iati_dataset_actions_changed_dataset'] = array(
  'order' => 100,
  'module' => 'IATI_Dataset_Actions',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_IATI_DATASET_ACTIONS_CHANGED_DATASET_FROM_IATI_DATASET_ACTIONS_TITLE',
  'get_subpanel_data' => 'iati_dataset_actions_changed_dataset',
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
