<?php

$dictionary["IATI_Datasets"]["fields"]["iati_datasets_creator_person"] = array(
  'name' => 'iati_datasets_creator_person',
  'type' => 'link',
  'relationship' => 'iati_datasets_creator_person',
  'source' => 'non-db',
  'module' => 'Contacts',
  'bean_name' => 'Contact',
  'vname' => 'LBL_IATI_DATASETS_CREATOR_PERSON_FROM_CONTACTS_TITLE',
  'id_name' => 'iati_datasets_creator_personcontacts_ida',
);
$dictionary["IATI_Datasets"]["fields"]["iati_datasets_creator_person_name"] = array(
  'name' => 'iati_datasets_creator_person_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_IATI_DATASETS_CREATOR_PERSON_FROM_CONTACTS_TITLE',
  'save' => true,
  'id_name' => 'iati_datasets_creator_personcontacts_ida',
  'link' => 'iati_datasets_creator_person',
  'table' => 'contacts',
  'module' => 'Contacts',
  'rname' => 'name',
  'db_concat_fields' =>
  array(
    0 => 'first_name',
    1 => 'last_name',
  ),
);
$dictionary["IATI_Datasets"]["fields"]["iati_datasets_creator_personcontacts_ida"] = array(
  'name' => 'iati_datasets_creator_personcontacts_ida',
  'type' => 'link',
  'relationship' => 'iati_datasets_creator_person',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_IATI_DATASETS_CREATOR_PERSON_FROM_CONTACTS_TITLE',
);
