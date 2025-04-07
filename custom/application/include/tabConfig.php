<?php

/*
** configuration of the top menu.  Each entry $GLOBALS['tabStructure']
** is a menu and the label strings are defined in
** custom/application/language/_override_en_us.IATI.php
*/

$GLOBALS['tabStructure'] = array(
  'LBL_TABGROUP_RELATIONSHIPS' =>
  array(
    'label' => 'LBL_TABGROUP_RELATIONSHIPS',
    'modules' =>
    array(
      0 => 'Home',
      1 => 'Accounts',
      2 => 'Contacts',
      3 => 'Calls',
      4 => 'Cases',
    ),
  ),
  'LBL_TABGROUP_REGISTRY_MANAGEMENT' =>
  array(
    'label' => 'LBL_TABGROUP_REGISTRY_MANAGEMENT',
    'modules' =>
    array(
      0 => 'Accounts',
      1 => 'IATI_Datasets',
      2 => 'IATI_Dataset_Actions',
      3 => 'IATI_Organisation_Actions',
    ),
  ),
);
