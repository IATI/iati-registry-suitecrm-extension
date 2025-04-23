<?php

$module_name = 'IATI_Organisation_Actions';
$viewdefs [$module_name] =
array(
  'EditView' =>
  array(
    'templateMeta' =>
    array(
      'maxColumns' => '2',
      'widths' =>
      array(
        0 =>
        array(
          'label' => '10',
          'field' => '30',
        ),
        1 =>
        array(
          'label' => '10',
          'field' => '30',
        ),
      ),
      'useTabs' => false,
      'tabDefs' =>
      array(
        'DEFAULT' =>
        array(
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
      'syncDetailEditViews' => true,
    ),
    'panels' =>
    array(
      'default' =>
      array(
        0 =>
        array(
          0 =>
          array(
            'name' => 'date_entered',
            'comment' => 'Date record created',
            'label' => 'LBL_DATE_ENTERED',
          ),
          1 =>
          array(
            'name' => 'iati_action_type',
            'studio' => 'visible',
            'label' => 'LBL_IATI_ACTION_TYPE',
          ),
        ),
        1 =>
        array(
          0 =>
          array(
            'name' => 'created_by_name',
            'label' => 'LBL_CREATED',
          ),
          1 =>
          array(
            'name' => 'iati_user_application',
            'label' => 'LBL_IATI_USER_APPLICATION',
          ),
        ),

        2 =>
        array(
          0 =>
          array(
            'name' => 'iati_org_actions_actor_person_name',
            'label' => 'LBL_ACTOR_PERSON',
          ),
        ),

        3 =>
        array(
          0 =>
          array(
            'name' => 'iati_org_actions_changed_org_name',
            'label' => 'LBL_CHANGED_ORG',
          ),
        ),
      ),
    ),
  ),
);
;
