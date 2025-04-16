<?php

$module_name = 'IATI_Organisation_Actions';
$listViewDefs [$module_name] =
array(
  'DATE_ENTERED' =>
  array(
    'type' => 'datetime',
    'label' => 'LBL_DATE_ENTERED',
    'width' => '10%',
    'default' => true,
  ),
  'IATI_ORG_ACTIONS_CHANGED_ORG_NAME' =>
  array(
    'type' => 'varchar',
    'label' => 'LBL_CHANGED_ORG',
    'width' => '10%',
    'default' => true,
  ),
  'IATI_ACTION_TYPE' =>
  array(
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_IATI_ACTION_TYPE',
    'width' => '10%',
    'default' => true,
  ),
  'IATI_ORG_ACTIONS_ACTOR_PERSON_NAME' =>
  array(
    'type' => 'varchar',
    'label' => 'LBL_ACTOR_PERSON',
    'width' => '10%',
    'default' => true,
  ),
  'IATI_USER_APPLICATION' =>
  array(
    'type' => 'varchar',
    'label' => 'LBL_IATI_USER_APPLICATION',
    'width' => '10%',
    'default' => true,
  ),
  'CREATED_BY_NAME' =>
  array(
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_CREATED',
    'id' => 'CREATED_BY',
    'width' => '10%',
    'default' => true,
  ),
);
;
