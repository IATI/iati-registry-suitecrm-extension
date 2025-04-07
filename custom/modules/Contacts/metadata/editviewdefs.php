<?php

$viewdefs ['Contacts'] =
array(
  'EditView' =>
  array(
    'templateMeta' =>
    array(
      'form' =>
      array(
        'hidden' =>
        array(
          0 => '<input type="hidden" name="opportunity_id" value="{$smarty.request.opportunity_id}">',
          1 => '<input type="hidden" name="case_id" value="{$smarty.request.case_id}">',
          2 => '<input type="hidden" name="bug_id" value="{$smarty.request.bug_id}">',
          3 => '<input type="hidden" name="email_id" value="{$smarty.request.email_id}">',
          4 => '<input type="hidden" name="inbound_email_id" value="{$smarty.request.inbound_email_id}">',
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
        'LBL_CONTACT_INFORMATION' =>
        array(
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
      'syncDetailEditViews' => true,
    ),
    'panels' =>
    array(
      'lbl_contact_information' =>
      array(
        0 =>
        array(
          0 =>
          array(
            'name' => 'last_name',
            'studio' =>
            array(
              'listview' => false,
            ),
            'label' => 'LBL_NAME',
          ),
        ),
        1 =>
        array(
          0 =>
          array(
            'name' => 'iati_inperson_name_c',
            'label' => 'LBL_IATI_INPERSON_NAME',
          ),
          1 =>
          array(
            'name' => 'iati_online_name_c',
            'label' => 'LBL_IATI_ONLINE_NAME',
          ),
        ),
        2 =>
        array(
          0 =>
          array(
            'name' => 'iati_country_c',
            'studio' => 'visible',
            'label' => 'LBL_IATI_COUNTRY',
          ),
          1 =>
          array(
            'name' => 'iati_timezone_c',
            'studio' => 'visible',
            'label' => 'LBL_IATI_TIMEZONE',
          ),
        ),
        3 =>
        array(
          0 =>
          array(
            'name' => 'email1',
            'studio' => 'false',
            'label' => 'LBL_EMAIL_ADDRESS',
          ),
        ),
        4 =>
        array(
          0 =>
          array(
            'name' => 'iati_mailing_list_subscriber_c',
            'label' => 'LBL_IATI_MAILING_LIST_SUBSCRIBER',
          ),
          1 =>
          array(
            'name' => 'iati_preferred_language_c',
            'label' => 'LBL_IATI_PREFERRED_LANGUAGE',
          ),
        ),
        5 =>
        array(
          0 =>
          array(
            'name' => 'assigned_user_name',
            'label' => 'LBL_ASSIGNED_TO_NAME',
          ),
        ),
      ),
    ),
  ),
);
;
