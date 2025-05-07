<?php

$module_name = 'IATI_Datasets';
$viewdefs [$module_name] =
array(
  'DetailView' =>
  array(
    'templateMeta' =>
    array(
      'form' =>
      array(
        'buttons' =>
        array(
          0 => 'EDIT',
          1 => 'DUPLICATE',
          2 => 'DELETE',
          3 => 'FIND_DUPLICATES',
        ),
      ),
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
          0 => 'name',
        ),
        1 =>
        array(
          0 =>
          array(
            'name' => 'iati_short_name',
            'label' => 'LBL_IATI_SHORT_NAME',
          ),
          1 =>
          array(
            'name' => 'iati_visibility',
            'label' => 'LBL_IATI_VISIBILITY'
          )
        ),
        2 =>
        array(
          0 =>
          array(
            'name' => 'iati_dataset_url',
            'label' => 'LBL_IATI_DATASET_URL',
          ),
        ),
        3 =>
        array(
          0 =>
          array(
            'name' => 'iati_metadata_update_date',
            'label' => 'LBL_IATI_METADATA_UPDATE_DATE',
          ),
          1 =>
          array(
            'name' => 'iati_url_update_date',
            'label' => 'LBL_IATI_URL_UPDATE_DATE',
          ),
        ),
        4 =>
        array(
          0 =>
          array(
            'name' => 'iati_licence_id',
            'studio' => 'visible',
            'label' => 'LBL_IATI_LICENCE_ID',
          ),
        ),
        5 =>
        array(
          0 =>
          array(
            'name' => 'iati_source_type',
            'studio' => 'visible',
            'label' => 'LBL_IATI_SOURCE_TYPE',
          ),
        ),
        6 =>
        array(
          0 => 'description',
        ),
        7 =>
        array(
          0 =>
          array(
            'name' => 'created_by_name',
            'label' => 'LBL_CREATED',
          ),
          1 =>
          array(
            'name' => 'date_entered',
            'customCode' => '{$fields.date_entered.value} {$APP.LBL_BY} {$fields.created_by_name.value}',
            'label' => 'LBL_DATE_ENTERED',
          ),
        ),
        8 =>
        array(
          0 =>
          array(
            'name' => 'iati_datasets_owner_org_name',
            'label' => 'LBL_IATI_DATASET_OWNER_ORG'
          ),
          1 =>
          array(
            'name' => 'iati_datasets_creator_person_name',
            'label' => 'LBL_IATI_DATASET_CREATOR_PERSON'
          ),
        ),
      ),
    ),
  ),
);
;
