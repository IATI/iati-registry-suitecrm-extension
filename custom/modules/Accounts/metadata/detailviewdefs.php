<?php

$viewdefs['Accounts'] =
  array(
    'DetailView' =>
    array(
      'templateMeta' =>
      array(
        'form' =>
        array(
          // These are the actions that appear on the dropdown.
          'buttons' =>
          array(
            0 => 'EDIT',
            1 => 'DUPLICATE',
            2 => 'DELETE',
            3 => 'FIND_DUPLICATES',
            'AOS_GENLET' =>
            array(
              'customCode' => '<input type="button" class="button" onClick="showPopup();" value="{$APP.LBL_PRINT_AS_PDF}">',
            ),
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
        'includes' =>
        array(
          0 =>
          array(
            'file' => 'modules/Accounts/Account.js',
          ),
        ),
        'useTabs' => false,
        // Specify the panels that will appear in the edit view for an Account
        'tabDefs' =>
        array(
          'LBL_ACCOUNT_INFORMATION' =>
          array(
            'newTab' => false,
            'panelDefault' => 'expanded',
          ),
          'LBL_EDITVIEW_PANEL1_CONTACTDETAILS' =>
          array(
            'newTab' => false,
            'panelDefault' => 'collapsed',
          ),
          'LBL_EDITVIEW_PANEL2_REPORTING' =>
          array(
            'newTab' => false,
            'panelDefault' => 'expanded',
          ),
        ),
        'syncDetailEditViews' => true,
      ),

      /*
      ** this is the definition for each panel
      */
      'panels' =>
      array(
        // overview of account information - each top level array is a row
        // and if there is one array in a row that means there is a single
        // column.
        'lbl_account_information' =>
        array(
          0 =>
          array(
            0 =>
            array(
              'name' => 'name',
              'label' => 'LBL_NAME',
              'comment' => 'Name of the Organisation',
            ),
          ),
          1 =>
          array(
            0 =>
            array(
              'name' => 'description',
              'label' => 'LBL_DESCRIPTION',
              'comment' => 'Narrative description of this Organisation',
            ),
          ),
          2 =>
          array(
            0 =>
            array(
              'name' => 'website',
              'type' => 'link',
              'label' => 'LBL_WEBSITE',
              'displayParams' =>
              array(
                'link_target' => '_blank',
              ),
            ),
          ),
          3 =>
          array(
            0 =>
            array(
              'name' => 'iati_hq_country_c',
              'studio' => 'visible',
              'label' => 'LBL_IATI_HQ_COUNTRY',
            ),
            1 =>
            array(
              'name' => 'iati_region_c',
              'studio' => 'visible',
              'label' => 'LBL_IATI_REGION',
            ),
          ),
          4 =>
          array(
            0 =>
            array(
              'name' => 'iati_identifier_c',
              'label' => 'LBL_IATI_IDENTIFIER',
            ),
            1 =>
            array(
              'name' => 'iati_org_type_c',
              'studio' => 'visible',
              'label' => 'LBL_IATI_ORG_TYPE',
            ),
          ),
          5 =>
          array(
            0 =>
            array(
              'name' => 'assigned_user_name',
              'label' => 'LBL_ASSIGNED_TO',
            ),
          ),
        ),

        // Contact details for this Organisation
        'lbl_editview_panel1_contactdetails' =>
        array(
          0 =>
          array(
            0 =>
            array(
              'name' => 'email1',
              'studio' => 'false',
              'label' => 'LBL_EMAIL',
            ),
          ),
          1 =>
          array(
            0 =>
            array(
              'name' => 'phone_office',
              'comment' => 'The office phone number',
              'label' => 'LBL_PHONE_OFFICE',
            ),
            1 =>
            array(
              'name' => 'phone_fax',
              'comment' => 'The fax phone number of this organisation',
              'label' => 'LBL_FAX',
            ),
          ),
          2 =>
          array(
            0 =>
            array(
              'name' => 'jjwg_maps_address_c',
              'label' => 'LBL_JJWG_MAPS_ADDRESS',
            ),
          ),
        ),

        // Data focused on this Organisation as a reporting org.
        'lbl_editview_panel2_reporting' =>
        array(
          0 =>
          array(
            0 =>
            array(
              'name' => 'iati_short_name_c',
              'label' => 'LBL_IATI_SHORT_NAME',
            ),
            1 =>
            array(
              'name' => 'iati_registry_approved_c',
              'label' => 'LBL_IATI_REGISTRY_APPROVED',
            ),
          ),
          1 =>
          array(
            0 =>
            array(
              'name' => 'iati_default_licence_id_c',
              'studio' => 'visible',
              'label' => 'LBL_IATI_DEFAULT_LICENCE_ID',
            ),
            1 =>
            array(
              'name' => 'iati_reporting_source_type_c',
              'studio' => 'visible',
              'label' => 'LBL_IATI_REPORTING_SOURCE_TYPE',
            ),
          ),
          2 =>
          array(
            0 =>
            array(
              'name' => 'iati_dataportal_url_c',
              'label' => 'LBL_IATI_DATAPORTAL_URL',
            ),
          ),
          3 =>
          array(
            0 =>
            array(
              'name' => 'iati_exclusions_policy_url_c',
              'label' => 'LBL_IATI_EXCLUSIONS_POLICY_URL',
            ),
          ),
          4 =>
            array(
            0 => array(
              'name' => 'iati_first_publish_date_c',
              'label' => 'LBL_IATI_FIRST_PUBLISH_DATE',
            ),
          ),
          5 =>
          array(
            0 =>
            array(
              'name' => 'iati_ckan_id_c',
              'label' => 'LBL_IATI_CKAN_ID',
            ),
          ),
        ),
      ),
    )
  );
