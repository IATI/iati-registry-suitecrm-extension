<?php

$layout_defs["Contacts"]["subpanel_setup"]['iati_datasets_creator_person'] = array(
  'order' => 100,
  'module' => 'IATI_Datasets',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_IATI_DATASETS_CREATOR_PERSON_FROM_IATI_DATASETS_TITLE',
  'get_subpanel_data' => 'iati_datasets_creator_person',
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
